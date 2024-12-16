<?php

use ErNine/DcatAdminMember\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('dcat-admin-member', Controllers\DcatAdminMemberController::class.'@index');