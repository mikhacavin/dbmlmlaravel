<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //

    public function __construct()
    {
        $this->Home = new Home();
    }


    public function home()
    {
        return view('home');
    }


    // function database
    public function index()
    {
        $data = [
            'data' => $this->Home->allData()
        ];
        return view('db.index', $data);
    }

    public function add()
    {
        $data = [
            'data' => $this->Home->allData()
        ];
       
        return view('db.add',$data);
    }


// simpan kedalam database
public function insert()
{

    if(Request()->upline === "null"){
        Request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            
        ]);
    
        $data = [
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'telp' => Request()->telp,
            'cek_upline' => 0
        ];
    
        $this->Home->addData($data);
        return redirect()->route('index');
    }else{


        $data = Home::where('upline', Request()->upline)->orderByDesc('id')->limit(1)->get()->first();


        if($data === null){
            Request()->validate([
                'nama' => 'required',
                'alamat' => 'required',
                'telp' => 'required',
            ]);
        
            $data = [
                'nama' => Request()->nama,
                'alamat' => Request()->alamat,
                'telp' => Request()->telp,
                'upline' => Request()->upline,
                'cek_upline' =>  1
            ];
        
            $this->Home->addData($data);
            return redirect()->route('index');
        }elseif($data->cek_upline === "2"){
            return redirect('/add')->with('status', 'Downline sudah penuh');
        }else{
            Request()->validate([
                'nama' => 'required',
                'alamat' => 'required',
                'telp' => 'required',
            ]);
        
            $data = [
                'nama' => Request()->nama,
                'alamat' => Request()->alamat,
                'telp' => Request()->telp,
                'upline' => Request()->upline,
                'cek_upline' => (int)$data->cek_upline + 1
            ];
        
            $this->Home->addData($data);
            return redirect()->route('index');
        }

    }

}



    public function edit($id)
    {
        if (!$this->Home->detailData($id)) {
            abort(404);
        }

        $data = [
            'anggota' => $this->Home->detailData($id),
            'data' => $this->Home->allData()
        ];

        return view('db.edit', $data);
    }


    // simpan produk yang telah diupdate
    public function update($id)
    {
        Request()->validate([
        //   
        ]);
            $data = [
                'nama' => Request()->nama,
                'alamat' => Request()->alamat,
                'telp' => Request()->telp,
                'upline' => Request()->upline,
            ];
            $this->Home->editData($id, $data);
        return redirect()->route('index');
    }

    public function detail($id)
    {
        if (!$this->Home->detailData($id)) {
            abort(404);
        }

        $data = [
            'anggota' => $this->Home->detailData($id),
            // 'downline' =>$this->Home->detailUpline($id),
        ];

        return view('db.detail', $data);
    }

   
    public function downline($id)
    {
        if (!$this->Home->Downline($id)) {
            abort(404);
        }

        $data = [
            'anggota' => $this->Home->Downline($id),
            // 'downline' =>$this->Home->detailUpline($id),
        ];

        return view('db.downline',$data);
    }

   
    
    public function delete($id){
        Home::destroy($id);
        return redirect('/index');
    }


}
