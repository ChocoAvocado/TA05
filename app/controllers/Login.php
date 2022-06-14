<?php 
// use Mailgun\Mailgun;
class Login extends Controller{
    public function index()
    {
        // $mg = Mailgun::create('2cf23b6dafb9f30258681a6c3c5d384d-50f43e91-1d507638');
        // $domain = "sandboxa3491d2671774ce789468eac03fe1bc9.mailgun.org";
        // # Make the call to the client.
        // $mg->messages()->send($domain, [
        //     'from'    => 'wcahya72@gmail.com',
        //     'to'      => 'takubisa05@gmail.com',
        //     'subject' => 'The PHP SDK is awesome!',
        //     'text'    => 'It is so simple to send a message.'
        //   ]);   BUAT NGIRIM EMAIL TAPI MASIH BELAAJR 

        $data['judul'] = 'Login';
        $data['status_sidebar'] = 'login';
        $this->view('login/index', $data);
    }
    public function email()
    {
        $data['judul'] = 'Login';
        $data['status_sidebar'] = 'login';
        $this->view('login/email', $data);
    }
}