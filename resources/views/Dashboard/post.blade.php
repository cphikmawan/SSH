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
    <span class="breadcrumb-item active">Posting</span>
</nav>
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Posting</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="fa fa-plus"></i> Posting Baru
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <!-- Topics -->
        <table class="table table-striped table-borderless table-vcenter">
            <thead class="thead-light">
                <tr>
                    <th colspan="2">Judul Posting</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 100px;">Balasan</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 100px;">Dilihat</th>
                    <th class="d-none d-md-table-cell" style="width: 200px;">Komentar Terakhir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="be_pages_forum_discussion.html">Welcome to our forums!</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Ralph Murray</a> pada <em>June 20, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">191</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">248</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jack Greene</a><br>pada <em>January 21, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="be_pages_forum_discussion.html">Big upgrades are coming soon!</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Wayne Garcia</a> pada <em>June 25, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">231</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">1213</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jesse Fisher</a><br>pada <em>January 18, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="be_pages_forum_discussion.html">Tips &amp; tricks for staying motivated</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Jack Greene</a> pada <em>January 15, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">131</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">749</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Adam McCoy</a><br>pada <em>January 13, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">2017, all the new features!</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Jose Mills</a> pada <em>January 21, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">203</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">2186</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Carol White</a><br>pada <em>January 13, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Issue when saving a file, can you help me?</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Brian Stevens</a> pada <em>May 26, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">275</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">1912</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Carol Ray</a><br>pada <em>January 2, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">New Features!</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Scott Young</a> pada <em>June 29, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">145</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">2021</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Ryan Flores</a><br>pada <em>January 2, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Question about the new features!</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Scott Young</a> pada <em>June 28, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">230</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">2344</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jose Parker</a><br>pada <em>January 1, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Which plan to choose?</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Amber Harvey</a> pada <em>March 12, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">213</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">1170</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Lisa Jenkins</a><br>pada <em>January 1, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Your web app saved me tons of time</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Helen Jacobs</a> pada <em>January 23, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">100</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">1774</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Henry Harrison</a><br>pada <em>January 12, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Is it easy to upgrade my plan?</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Brian Stevens</a> pada <em>May 10, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">265</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">1537</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jesse Fisher</a><br>pada <em>January 6, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Check out all those tips &amp; tricks!</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Laura Carr</a> pada <em>May 5, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">296</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">1379</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Lori Grant</a><br>pada <em>January 5, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Review needed</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Justin Hunt</a> pada <em>May 3, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">254</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">675</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Melissa Rice</a><br>pada <em>January 4, 2017</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="be_pages_forum_discussion.html">Testing out the API</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Lori Grant</a> pada <em>April 25, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">118</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">888</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Thomas Riley</a><br>pada <em>January 4, 2017</em></span>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- END Topics -->

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end mr-20">
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
</div>
@endsection