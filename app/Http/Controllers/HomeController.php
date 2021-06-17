<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\User;
use App\Disposisi;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

/*

public function olahTabelUserPost($name){
    //validasi parameter url nama, parameter nama harus ada sesuai isi di tabel user, jika tidak ada akan error atau fail
    $user = User::where('name',$name)->firstOrFail();

    //parsing variabel $user di view. Buat file juga di resources-views-Relasi-OneToMany.blade.php
    return view('mail/index',compact('user'));
}*/



    public function home()
    {   
        $counts = Mail::where('mail_typeid','1')->count();
        $count = Mail::where('mail_typeid','2')->count();
        $countd = User::where('role_id','1')->count();


        return view('home')->with('counts', $counts)->with('count', $count)->with('countd', $countd);
    }







     public function index_suratmasuk()
    {
        $data['mail'] = Mail::all();
/*        $user = User::all();
*/        return view('surat_masuk/index')->with($data)/*->with('user',$user)*/;
    }

    public function create_suratmasuk()
    {
        $data['type_mail'] = \App\Type_mail::all();
        return view('surat_masuk/create')->with($data);
    }
    public function save_suratmasuk(Request $r)
    {
     $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'incoming_at' => 'required',
            'mail_code' => 'required|unique:mails',
            'mail_date' => 'required',
            'mail_from' => 'required',
            'mail_to' => 'required',
            'mail_subject' => 'required',
            'description' => 'required',
            'file_upload' => 'required',
              ],
            $message);
        
            $mail = new Mail;
            $mail->incoming_at = $r->input('incoming_at'); 
            $mail->mail_code = $r->input('mail_code'); 
            $mail->mail_date = $r->input('mail_date'); 
            $mail->mail_from = $r->input('mail_from'); 
            $mail->mail_to = $r->input('mail_to'); 
            $mail->mail_subject = $r->input('mail_subject'); 
            $mail->description = $r->input('description'); 

            $file = $r->file('file_upload');
            $mail ->file_upload = $file-> getClientOriginalName();
            $file->move('file_upload/',$file->getClientOriginalName());
            $mail->mail_typeid = $r->input('mail_typeid'); 
            $mail->user_id = $r->input('user_id'); 
            $mail->save();
            return redirect(url('surat_masuk/index')); 



}

public function edit_suratmasuk($id){
            $data['mail'] = Mail::find($id);

    return view('surat_masuk/edit')->with($data);
}
public function update_suratmasuk(Request $r){
  $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'incoming_at' => 'required',
            'mail_code' => 'required|size|unique:mails',
            'mail_date' => 'required',
            'mail_from' => 'required',
            'mail_to' => 'required',
            'mail_subject' => 'required',
            'description' => 'required',
            'file_upload' => 'required',
              ],
            $message);
           
                    $id = $r->input('id');
            
            $mail = mail::find($id);
            $mail->incoming_at = $r->input('incoming_at'); 
            $mail->mail_code = $r->input('mail_code'); 
            $mail->mail_date = $r->input('mail_date'); 
            $mail->mail_from = $r->input('mail_from'); 
            $mail->mail_to = $r->input('mail_to'); 
            $mail->mail_subject = $r->input('mail_subject'); 
            $mail->description = $r->input('description'); 
            $file = $r->file('file_upload');
            $mail ->file_upload = $file-> getClientOriginalName();
            $file->move('file_upload/',$file->getClientOriginalName());
       
            $mail->save();
        return redirect(url('surat_masuk/index'));






}
public function delete_suratmasuk($id)
    {
        Mail::whereId($id)->delete();
        return redirect(url('surat_masuk/index'));
    }
      public function index_suratkeluar()
    {
        $data['mail'] = Mail::all();
/*        $user = User::all();
*/        return view('surat_keluar/index')->with($data)/*->with('user',$user)*/;
    }

    public function create_suratkeluar()
    {
        $data['type_mail'] = \App\Type_mail::all();
        return view('surat_keluar/create')->with($data);
    }
    public function save_suratkeluar(Request $r)
    {
     $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'incoming_at' => 'required',
            'mail_code' => 'required|unique:mails',
            'mail_date' => 'required',
            'mail_from' => 'required',
            'mail_to' => 'required',
            'mail_subject' => 'required',
            'description' => 'required',
            'file_upload' => 'required',
              ],
            $message);
        
            $mail = new Mail;
            $mail->incoming_at = $r->input('incoming_at'); 
            $mail->mail_code = $r->input('mail_code'); 
            $mail->mail_date = $r->input('mail_date'); 
            $mail->mail_from = $r->input('mail_from'); 
            $mail->mail_to = $r->input('mail_to'); 
            $mail->mail_subject = $r->input('mail_subject'); 
            $mail->description = $r->input('description'); 

            $file = $r->file('file_upload');
            $mail ->file_upload = $file-> getClientOriginalName();
            $file->move('file_upload/',$file->getClientOriginalName());
            $mail->mail_typeid = $r->input('mail_typeid'); 
            $mail->user_id = $r->input('user_id'); 
            $mail->save();
            return redirect(url('surat_keluar/index')); 



}

public function edit_suratkeluar($id){
            $data['mail'] = Mail::find($id);

    return view('surat_keluar/edit')->with($data);
}
public function update_suratkeluar(Request $r){
$message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'incoming_at' => 'required',
            'mail_code' => 'required|unique:mails',
            'mail_date' => 'required',
            'mail_from' => 'required',
            'mail_to' => 'required',
            'mail_subject' => 'required',
            'description' => 'required',
            'file_upload' => 'required',
              ],
            $message);
           
                    $id = $r->input('id');
            
            $mail = mail::find($id);
            $mail->incoming_at = $r->input('incoming_at'); 
            $mail->mail_code = $r->input('mail_code'); 
            $mail->mail_date = $r->input('mail_date'); 
            $mail->mail_from = $r->input('mail_from'); 
            $mail->mail_to = $r->input('mail_to'); 
            $mail->mail_subject = $r->input('mail_subject'); 
            $mail->description = $r->input('description'); 
            $file = $r->file('file_upload');
            $mail ->file_upload = $file-> getClientOriginalName();
            $file->move('file_upload/',$file->getClientOriginalName());
       
            $mail->save();
        return redirect(url('surat_keluar/index'));






}
public function delete_suratkeluar($id)
    {
        Mail::whereId($id)->delete();
        return redirect(url('surat_keluar/index'));
    }
  public function index_admin()
    {
        $data['user'] = User::all();
       return view('Admin/index')->with($data);
    }



    public function save_admin(Request $r){
        $user = new User;
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->role_id = 1;
        $user->save();

        return redirect(url('Admin/index'));
    }


    public function create_admin(){
       
        $data['user'] = \App\User::all();

        return view('Admin/create')->with($data);
    }

public function edit_admin($id){
            $data['user'] = User::find($id);

    return view('Admin/edit')->with($data);
}
public function update_admin(Request $r){
                    $id = $r->input('id');

           
            
            $user = User::find($id);
            $user->name = $r->input('name'); 
            $user->email = $r->input('email'); 
            $user->password = $r->input('password'); 
          
            $user->save();
        return redirect(url('admin/index'));






}
public function delete_admin($id)
    {
        User::whereId($id)->delete();
        return redirect(url('Admin/index'));
    }


    public function save_disposisi(Request $r){
                    
        $id = $r->input('id');

        $disposisi = Mail::find($id);
        $disposisi = new Disposisi;
        $disposisi->reply_at = $r->input('reply_at'); 
        $disposisi->description = $r->input('description'); 
        $disposisi->notification = $r->input('notification'); 
        $disposisi->status = $r->input('status'); 
        $disposisi->user_id= $r->input('user_id'); 

   
        $disposisi->save();

        return redirect(url('disposisi/index'));
    }


    public function create_disposisi($id){
       
        $data['mail'] = \App\Mail::find($id);
        $datas['user'] = \App\User::all();
        $datad['type_mail'] = \App\Type_mail::all();

        return view('disposisi/create')->with($data)->with($datas)->with($datad);
    }

     public function index_disposisi()
    {
        $data['disposisi'] = Disposisi::all();
/*        $ = User::all();
*/        return view('disposisi/index')->with($data)/*->with('user',$user)*/;
    }
public function detail_disposisi($id)
{
     $tampilkan = Disposisi::find($id);
    $data['mail'] = \App\Mail::find($id);



    return view('disposisi/detail')->with('tampilkan',$tampilkan)->with($data);
}
public function delete_disposisi($id)
    {
        Disposisi::whereId($id)->delete();
        return redirect(url('disposisi/index'));
    }
    public function detail_suratmasuk($id)
{
     $tampilkan = Mail::find($id);



    return view('surat_masuk/detail')->with('tampilkan',$tampilkan);
}

public function detail_suratkeluar($id)
{
     $tampilkan = Mail::find($id);



    return view('surat_keluar/detail')->with('tampilkan',$tampilkan);
}
  public function downloadpdf_allsuratmasuk()
    {
        $data['mail'] = Mail::where('mail_typeid','1')->get();
        $pdf = PDF::loadview('surat_masuk.pdfall',$data);
/*        dd($data['mail']);
*/        return $pdf->download('data_suratmasukall.pdf');
    }
public function downloadpdf_allsuratkeluar()
    {
        $data['mail'] = Mail::where('mail_typeid','2')->get();
        $pdf = PDF::loadview('surat_keluar.pdfall',$data);
        return $pdf->download('data_suratkeluarall.pdf');
    }
public function downloadpdf_alluser()
    {
        $data['user'] = User::all();
        $pdf = PDF::loadview('Admin.pdfall',$data);
        return $pdf->download('data_userall.pdf');
    }
public function downloadpdf_alldisposisi()
    {
        $data['disposisi'] = Disposisi::all();
        $pdf = PDF::loadview('disposisi.pdfall',$data);
        return $pdf->download('data_disposisiall.pdf');
    }
}