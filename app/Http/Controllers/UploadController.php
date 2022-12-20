<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UploadController extends Controller
{
public function upload(){
return view('upload'); // render ke file upload.blade.php
}
public function proses_upload(Request $request)
{ // untuk melakukan pemrosesan upload
$this->validate($request, [
'file' => 'required',
'keterangan' => 'required',
]);
$file = $request->file('file'); // ambil filenya masukkan dalam variabel $file
echo 'File Name: '.$file->getClientOriginalName(); // nama file aslinya
echo '<br>';
echo 'File Extension: '.$file->getClientOriginalExtension(); // nama ekstensinya
echo '<br>';
echo 'File Real Path: '.$file->getRealPath(); // ambil real path nya
echo '<br>';
echo 'File Size: '.$file->getSize(); // ambil size nya
echo '<br>';
echo 'File Mime Type: '.$file->getMimeType(); // ambil mime tipe
$tujuan_upload = 'uploads';
$file->move($tujuan_upload,$file->getClientOriginalName()); // upload ke direktori tujuan
// file akan disimpan didalam direktori public/uploads
}
}
