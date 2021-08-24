<?php

namespace App\Controllers;

class Home extends BaseController       
{
        public function __construct() {
            helper('form');
            $this->session = session();
        }
    
	public function index()
	{
		return view('home_view');
	}
        
        public function about()
        {
            return view('about_view');
        }
        
        public function contact()
        {
            $data = [];
            $data['validation'] = null;
            $rules = [
                'name' => [
                  'rules' => 'required|min_length[3]',
                    'errors' => [
                       'required' => 'Enter Your Name.',
                        'min_length' => 'Minimum {param} characters required',
                    ],  
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                       'required' => 'Enter Your Email Id.',
                        'valid_email' => 'Please Enter your valid Email ID.',
                    ],
                ],
                'mobile' => [
                    'rules' => 'required|numeric|exact_length[10]',
                    'errors' => [
                       'required' => 'Enter Your Mobile No.',
                        'numeric' => '{value} is not a numeric',
                        'exact_length' => '{value} is not {param} length.',
                    ],
                ],
            ];
            
            if($this->request->getMethod() == "post")
            {
                if($this->validate($rules))
                {
                    $to = 'chetankumar.nv@gmail.com';
                    $subject = 'Online Enquiry';
                    $message = '<html><body>'
                                   . '<table rules="all" style="border-style: solid; border-color: #666;" cellpadding="10">'
                                   . "<tr style='background: #eee;'><td><strong>Online Enquery:</strong> </td><td>" . 'Contact Page' . "</td></tr>"
                                   . "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>"
                                   . "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>"
                                   . "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['mobile']) . "</td></tr>"
                                   . "<tr><td><strong>Type of Gifts:</strong> </td><td>" . strip_tags($_POST['gifts']) . "</td></tr>"
                                   . "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($_POST['comment']) . "</td></tr>"
                                   . "</table>"
                                   . "</body></html>";
                    
                    $email = \Config\Services::email();
                    $email->setTo($to);
                    $email->setFrom('digitalchetan85@gmail.com', 'Info');
                    $email->setSubject($subject);
                    $email->setMessage($message);
                    
                    if ($email->send())
                    {
                        $this->session->setTempdata('success', 'Thanks for contacting us. We will reach you soon.',3);
                        return redirect()->to(current_url());
                    } else {
                        $this->session->setTempdata('error', 'Email is not sent. Please try again.',3);
                        return redirect()->to(current_url());
                    }
                }
                else 
                {
                    $data['validation'] = $this->validator;
                }
            }
            
            return view('contact_view', $data);
        }
       
}
