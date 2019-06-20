<?php
namespace App\Handlers;
class ExcelHandler
{
    /**
     * 文档上传方法
     */
    protected $allowed_ext = ['xls', 'xlsx'];
    public function saveExcel($file, $folder, $file_prefix)
    {
        $folder_name = "uploads/excels/$folder/" . date("Ym/d", time());
        $upload_path = public_path() . '/' . $folder_name;
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'xls';
        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;
        if (!in_array($extension, $this->allowed_ext)) {
            return false;
        }
        $file->move($upload_path, $filename);

        return [
            'path' => public_path().'/' .$folder_name.'/'.$filename
        ];
    }
}