<?php

namespace ErNine/DcatAdminMember\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class DcatAdminMemberController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('ErNine.dcat_admin_member::index'));
    }
}