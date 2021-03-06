<?php

namespace App\Http\Admin\Controllers;

use App\Services\MyStorage as StorageService;

/**
 * @RoutePrefix("/admin/upload")
 */
class UploadController extends Controller
{

    /**
     * @Post("/cover/img", name="admin.upload.cover_img")
     */
    public function uploadCoverImageAction()
    {
        $service = new StorageService();

        $file = $service->uploadCoverImage();

        if ($file) {
            return $this->jsonSuccess([
                'data' => [
                    'src' => $service->getImageUrl($file->path),
                    'title' => $file->name,
                ]
            ]);
        } else {
            return $this->jsonError(['msg' => '上传文件失败']);
        }
    }

    /**
     * @Post("/avatar/img", name="admin.upload.avatar_img")
     */
    public function uploadAvatarImageAction()
    {
        $service = new StorageService();

        $file = $service->uploadAvatarImage();

        if ($file) {
            return $this->jsonSuccess([
                'data' => [
                    'src' => $service->getImageUrl($file->path),
                    'title' => $file->name,
                ]
            ]);
        } else {
            return $this->jsonError(['msg' => '上传文件失败']);
        }
    }

    /**
     * @Post("/content/img", name="admin.upload.content_img")
     */
    public function uploadContentImageAction()
    {
        $service = new StorageService();

        $file = $service->uploadContentImage();

        if ($file) {
            return $this->jsonSuccess([
                'data' => [
                    'src' => $service->getImageUrl($file->path),
                    'title' => $file->name,
                ]
            ]);
        } else {
            return $this->jsonError(['msg' => '上传文件失败']);
        }
    }

}
