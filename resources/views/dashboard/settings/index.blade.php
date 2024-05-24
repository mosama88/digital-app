@extends('dashboard.layouts.master')
@section('title_admin','Settings')
@section('settings.active','active')
@section('content')



            <!-- Content wrapper -->
            <div class=" content-wrapper">
                <!-- Content -->

                <div class=" container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{route('dashboard.index')}}">Dashboard</a> /</span> Settings </h4>

                    <div class=" card mb-4">

                        @livewire('dashboard.settings.update-settings')

                    </div>
                </div>

                </div>
                <!-- / Content -->

        <!-- / Layout page -->

@endsection
