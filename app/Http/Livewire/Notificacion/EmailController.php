<?php

namespace App\Http\Livewire\Notificacion;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Models\Notificacion;
use Mail;
use App\Models\User;
use App\Models\Pedido;
use App\Models\PedidoDetalles;

class EmailController extends Component
{
    public $index;

    public function mount($index = 0)
    {
        $this->index = $index;
    }

    public function render()
    {
        switch ($variable) {
            case '1':
                # code...
                break;
            
            default:
                return view('livewire.notificacion.email-controller');
                break;
        }        
    }

    public function sendEmail($operacion, User $user, $nropedido = 0 )
    {
        switch ($operacion) {
            case 'welcome':
                $this->sendMailWelcome($user);
                break;
            case 'compra':
                $this->compraRealizada($user, $nropedido);
                break;
            
            case 'compraRealizadaWithImages':
                $this->compraRealizadaWithImages($user, $nropedido);
                break;
            
            case 'confirmacionPago':
                $this->confirmacionPago($user, $nropedido);
                break;
            
            case 'confirmacionFallida':
                $this->confirmacionFallida($user, $nropedido);
                break;
            
            default:
                dd('default');
                return view('livewire.notificacion.email-controller');
                break;
        }

        $this->dispatchBrowserEvent('updated', ['message' => "Notificación enviada."]);
    }

    public function sendMailWithAttachment($user, $title = '', $body = '')
    {
        // Laravel 8

        $data["email"] = $user->email;
        $data["title"] = "Techsolutionstuff";
        $data["body"] = "This is test mail with attachment";
 
        $files = [
            public_path('img/regalo.png'),
            public_path('img/test_pdf.pdf'),
        ];
  
        Mail::send('emails.test_mail', $data, function($message) use ($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

        // $mailData = [
        //     'title' => 'This is Test Mail',
        //     'files' => [
        //         public_path('img/regalo.png'),
        //         public_path('img/test_pdf.pdf'),
        //     ],
        // ];
           
        // Mail::to('to@gmail.com')->send(new TestMail($mailData));
 
    }

    public function sendMailNotificacion($user, Notificacion $notificacion)
    {
        // Laravel 8

        $data["email"] = $user->email;
        $data["title"] = $notificacion->title;
        $data["body"] = $notificacion->content;
 
        $files = [
            $notificacion->file_url,
        ];
  
        Mail::send('emails.test_mail', $data, function($message) use ($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

    }

    public function sendMailWelcome(User $user, $file = null)
    {
        // Laravel 8

        $data["user"] = $user;
        $data["names"] = $user->names;
        $data["surnames"] = $user->surnames;
        $data["email"] = $user->email;
        $data["title"] = 'Bienvenid(@) a PanExpres.com';
        $data["body"] = 'Te damos la bienvenida';
        
        if($file !== null)
        {
            $files = [
                $notificacion->file_url,
            ];
        }
        
        if($file !== null)
        {
            Mail::send('emails.welcome-panexpres', $data, function($message) use ($data, $files) {
                $message->to($data["email"])
                        ->subject($data["title"]);
     
                foreach ($files as $file){
                    $message->attach($file);
                }            
            });
        }else{
            Mail::send('emails.welcome-panexpres', $data, function($message) use ($data) {
                $message->to($data["email"])
                        ->subject($data["title"]);
     
            });
        }
        

    }

    public function compraRealizada(User $user, $nropedido)
    {
        $data["user"] = $user;
        $data["names"] = $user->names;
        $data["surnames"] = $user->surnames;
        $data["email"] = $user->email;
        $data["title"] = 'Compra realizada';
        $data["nropedido"] = $nropedido;
        $pedido = Pedido::where('nropedido', $nropedido)->first();
        $data["body"] = 'Pedido ' . $nropedido . ', con referencia ' . $pedido->reference . ' fue recibido.' .'<br>';
        $data["body"] .= 'Nuestro equipo de venta atenderá su pedido, en espera de validación, Gracias por su compra';
        
        Mail::send('emails.compra-realizada', $data, function($message) use ($data) {
            $message->to($data["email"])
                    ->subject($data["title"]);
    
        });
        

    }

    public function compraRealizadaWithImages(User $user, $nropedido)
    {
        $data["user"] = $user;
        $data["names"] = $user->names;
        $data["surnames"] = $user->surnames;
        $data["email"] = $user->email;
        $data["title"] = 'Compra realizada';
        $data["nropedido"] = $nropedido;
        $data["body"] = 'Gracias por su compra';

        $detalles = PedidoDetalles::where('nropedido', $nropedido)->get();

        $files = [];

        
        foreach($detalles as $detalle)
        {
            $files[] = $detalle->image;
        }

        $data['detalles'] = $detalles;
        
        Mail::send('emails.compra-realizada-img', $data, function($message) use ($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });
        

    }

    public function confirmacionPago(User $user, $nropedido)
    {
        $data["user"] = $user;
        $data["names"] = $user->names;
        $data["surnames"] = $user->surnames;
        $data["email"] = $user->email;
        $data["title"] = 'Confirmación del pago';
        $data["nropedido"] = $nropedido;
        $pedido = Pedido::where('nropedido', $nropedido)->first();
        $data["body"] = 'La compra ' . $nropedido . ', con referencia ' . $pedido->reference . ' fue procesado satisfactoriamente!';
                
        Mail::send('emails.pago-confirmado', $data, function($message) use ($data) {
            $message->to($data["email"])
                    ->subject($data["title"]);    
        });
    }

    public function confirmacionFallida(User $user, $nropedido)
    {
        $data["user"] = $user;
        $data["names"] = $user->names;
        $data["surnames"] = $user->surnames;
        $data["email"] = $user->email;
        $data["title"] = 'Confirmacion Pago';
        $data["nropedido"] = $nropedido;
        $pedido = Pedido::where('nropedido', $nropedido)->first();
        $data["body"] = 'La compra ' . $nropedido . ', con referencia ' . $pedido->reference . ' no fue procesado.' .'<br>';
        $data["body"] .= 'Lo invitamos a ponerse en contacto con nuestro personal de soporte por los teléfonos '. $pedido->comercio->telefono ;
        Mail::send('emails.pago-fallido', $data, function($message) use ($data) {
            $message->to($data["email"])
                    ->subject($data["title"]);    
        });
    }
}
