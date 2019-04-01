@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-list bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Documentation And Physical Exams</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('documentation_and_physical_exams.documentation_and_physical_exam.create') }}" class="btn btn-success" title="Create New Documentation And Physical Exam">
                                    <span class="feather icon-plus" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div id="wizard">
                                            <section>

                        <div class="row">

                            @if(Session::has('success_message'))
                                <div class="col-md-12">
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        {!! session('success_message') !!}

                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                </div>
                            @endif

                            <div class="col-md-12">
                                @if(count($documentationAndPhysicalExams) == 0)
                                    <div class="panel-body text-center">
                                        <h4>No Documentation And Physical Exams Available!</h4>
                                    </div>
                                @else
                                    <div class="panel-body panel-body-with-table">
                                        <div class="table-responsive">

                                            <table class="table table-striped" id="datatable">
                                                <thead>
                                                <tr>
                                                                                <th>Patient Name</th>
                            <th>Date Examined</th>
                            <th>Preceptor Name</th>
                            
                          
                            <th>HT</th>
                            <th>WT</th>
                            <th>BMI</th>
                            

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($documentationAndPhysicalExams as $documentationAndPhysicalExam)
                                                    <tr>
                                                                                    <td>{{ $documentationAndPhysicalExam->patient_name }}</td>
                            <td>{{ $documentationAndPhysicalExam->date_examined }}</td>
                            <td>{{ $documentationAndPhysicalExam->preceptor_name }}</td>
                        
                    
                            <td>{{ $documentationAndPhysicalExam->h_t }}</td>
                            <td>{{ $documentationAndPhysicalExam->w_t }}</td>
                            <td>{{ $documentationAndPhysicalExam->b_m_i }}</td>
                           

                                                        <td>

                                                            <form method="POST" action="{!! route('documentation_and_physical_exams.documentation_and_physical_exam.destroy', $documentationAndPhysicalExam->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                                    <a href="{{ route('documentation_and_physical_exams.documentation_and_physical_exam.show', $documentationAndPhysicalExam->id ) }}" class="btn btn-sm btn-info" title="Show Documentation And Physical Exam">
                                                                        <span class="feather icon-eye" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="{{ route('documentation_and_physical_exams.documentation_and_physical_exam.edit', $documentationAndPhysicalExam->id ) }}" class="btn btn-sm btn-primary" title="Edit Documentation And Physical Exam">
                                                                        <span class="feather icon-edit" aria-hidden="true"></span>
                                                                    </a>

                                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete Documentation And Physical Exam" onclick="return confirm(&quot;Delete Documentation And Physical Exam?&quot;)">
                                                                        <span class="feather icon-trash" aria-hidden="true"></span>
                                                                    </button>
                                                                </div>

                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="panel-footer">
                                        {!! $documentationAndPhysicalExams->render() !!}
                                    </div>

                                @endif
                            </div>
                        </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection