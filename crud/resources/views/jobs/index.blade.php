@extends('templates.main')
@section('content')

    <div class="container">
        <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
            <h5>Current avaliable jobs</h5>
            <h2><span>{{ $allJobs }}</span> jobs</h2>
        </div>
        <div class="row jobs">
            <div class="col-md-9">
                <div class="job-posts table-responsive">
                    <table class="table">
                        @foreach ($jobs as $job)
                            <tr class="odd wow fadeInUp" data-wow-delay="1s">
                                <td class="tbl-title" style="padding-left: 40px"><h4>{{ $job->title }}</h4></td>
                                <td><p>{{ $job->company->name }}</p></td>
                                <td><p><i class="icon-location"></i>{{ $job->city->name }}</p></td>
                                <td><p>₺ {{ $job->salary }}</p></td>
                                <td class="tbl-apply"><a href="#">Apply</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="more-jobs">
                    <a href=""> <i class="fa fa-refresh"></i>Click for more jobs</a>
                </div>
            </div>

        </div>
    </div>
    <hr>



    </div>
@endsection