@extends('dashboard.layouts.master')
@section('title_admin', 'Skills')
@section('skills.active', 'active')
@section('content')



    <!-- Content wrapper -->
    <div class=" content-wrapper">
        <!-- Content -->

        <div class=" container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a
                        href="{{ route('dashboard.index') }}">Dashboard</a> /</span> Skills </h4>
           
            <div class=" card mb-4">


                @livewire('dashboard.skills.skills-data')


            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>

    </div>
    <!-- / Content -->

    <!-- / Layout page -->

@endsection
