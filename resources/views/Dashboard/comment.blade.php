@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('aside')
    @include('layouts.dashboard.aside')
@endsection

@section('sidebar')
    @include('layouts.dashboard.sidebar')
@endsection

@section('header')
    @include('layouts.dashboard.header')    
@endsection

@section('content')
<nav class="breadcrumb bg-white push">
    <a class="breadcrumb-item" href="{{ url('/dashboard') }}">Dasbor</a>
    <a class="breadcrumb-item" href="{{ url('/post') }}">Posting</a>
    <span class="breadcrumb-item active">Just a small question!</span>
</nav>
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Sunday Sharing Homeless Ekspedisi Ke 4</h3>
        <div class="block-options">
            <a class="btn-block-option" href="#forum-reply-form" data-toggle="scroll-to">
                <i class="fa fa-reply"></i> Balas
            </a>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <!-- Discussion -->
        <table class="table table-borderless">
            <tbody>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Penyok</a> pada <em>13 Mei 2018 16:15</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar8.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>1 Posting<br>Level 6</small>
                    </td>
                    <td>
                        <p>“Allah menghendaki kemudahan bagimu dan tiada menghendaki kesulitan” (QS. Al-Baqarah: 185).</p>
                        <hr>
                        <p class="font-size-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                    </td>
                </tr>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Fuad</a> pada <em>14 Mei 2018 10:09</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar16.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>1 Posting<br>Level 10</small>
                    </td>
                    <td>
                        <p>“Apapun harta yang kalian infakkan maka Allah pasti akan menggantikannya, dan Dia adalah sebaik-baik pemberi rezeki" (QS. Saba: 39)</p>
                        <hr>
                        <p class="font-size-sm text-muted">Be yourself; everyone else is already taken.</p>
                    </td>
                </tr>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Hikmawan</a> on <em>14 Mei 2018 20:17</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar12.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>1 Posting<br>Level 1</small>
                    </td>
                    <td>
                        <p>“Barangsiapa memberi pinjaman kepada Allah dengan pinjaman yang baik, maka Allah akan melipatgandakan balasan pinjaman itu untuknya dan dia akan memperoleh pahala yang banyak” (QS. Al Hadid: 11)</p>
                        <hr>
                        <p class="font-size-sm text-muted">Don't cry because it's over, smile because it happened.</p>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar10.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>0 Posting<br>Level 10</small>
                    </td>
                    <td>
                        <form action="be_pages_forum_discussion.html" method="post" onsubmit="return false;">
                            <div class="form-group row">
                                <div class="col-12">
                                    <!-- CKEditor (js-ckeditor id is initialized in Codebase() -> uiHelperCkeditor()) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <textarea id="js-ckeditor" name="ckeditor"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-reply"></i> Balas
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- END Discussion -->
    </div>
</div>
@endsection