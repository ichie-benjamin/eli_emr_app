@extends('layouts.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($documentationAndPhysicalExam->head) ? $documentationAndPhysicalExam->head : 'Documentation And Physical Exam' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('documentation_and_physical_exams.documentation_and_physical_exam.edit', $documentationAndPhysicalExam->id ) }}" class="btn btn-primary" title="Edit Documentation And Physical Exam">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('documentation_and_physical_exams.documentation_and_physical_exam.index') }}" class="btn btn-primary" title="Show All Documentation And Physical Exam">
                                        <span class="feather icon-list" aria-hidden="true"></span>
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

                            <div class="row">
                                <div class="col-md-12 col-xl-12">

            <dl class="dl-horizontal">
                            <dt>Patient Name</dt>
            <dd>{{ $documentationAndPhysicalExam->patient_name }}</dd>
            <dt>Date Examined</dt>
            <dd>{{ $documentationAndPhysicalExam->date_examined }}</dd>
            <dt>Preceptor Name</dt>
            <dd>{{ $documentationAndPhysicalExam->preceptor_name }}</dd>
            <dt>Chief Complaint</dt>
            <dd>{{ $documentationAndPhysicalExam->chief_complaint }}</dd>
            <dt>History Of Present Illness</dt>
            <dd>{{ $documentationAndPhysicalExam->history_of_illnes }}</dd>
            <dt>Past Medical History</dt>
            <dd>{{ $documentationAndPhysicalExam->past_medical_history }}</dd>
            <dt>Immunization</dt>
            <dd>{{ $documentationAndPhysicalExam->immunization }}</dd>
            <dt>Phemonia</dt>
            <dd>{{ $documentationAndPhysicalExam->phemonia }}</dd>
            <dt>TDap</dt>
            <dd>{{ $documentationAndPhysicalExam->t_dap }}</dd>
            <dt>Zoster</dt>
            <dd>{{ $documentationAndPhysicalExam->zoster }}</dd>
            <dt>Family History</dt>
            <dd>{{ $documentationAndPhysicalExam->family_history }}</dd>
            <dt>Social History</dt>
            <dd>{{ $documentationAndPhysicalExam->social_history }}</dd>
            <dt>HT</dt>
            <dd>{{ $documentationAndPhysicalExam->h_t }}</dd>
            <dt>WT</dt>
            <dd>{{ $documentationAndPhysicalExam->w_t }}</dd>
            <dt>BMI</dt>
            <dd>{{ $documentationAndPhysicalExam->b_m_i }}</dd>
            <dt>Temp</dt>
            <dd>{{ $documentationAndPhysicalExam->temp }}</dd>
            <dt>Pulse</dt>
            <dd>{{ $documentationAndPhysicalExam->pulse }}</dd>
            <dt>BP</dt>
            <dd>{{ $documentationAndPhysicalExam->b_p }}</dd>
            <dt>RR</dt>
            <dd>{{ $documentationAndPhysicalExam->r_r }}</dd>
            <dt>Pain</dt>
            <dd>{{ $documentationAndPhysicalExam->pain }}</dd>
            <dt>Head</dt>
            <dd>{{ $documentationAndPhysicalExam->head }}</dd>
            <dt>Eyes</dt>
            <dd>{{ $documentationAndPhysicalExam->eyes }}</dd>
            <dt>Ears/Nose/Throat</dt>
            <dd>{{ $documentationAndPhysicalExam->ears_nose_throat }}</dd>
            <dt>Mouth</dt>
            <dd>{{ $documentationAndPhysicalExam->mouth }}</dd>
            <dt>Neck</dt>
            <dd>{{ $documentationAndPhysicalExam->neck }}</dd>
            <dt>Respiratory</dt>
            <dd>{{ $documentationAndPhysicalExam->respiratory }}</dd>
            <dt>CadioVascular</dt>
            <dd>{{ $documentationAndPhysicalExam->cadio_vascular }}</dd>
            <dt>Gastrointestinal</dt>
            <dd>{{ $documentationAndPhysicalExam->gastrointestinal }}</dd>
            <dt>Lymphatic</dt>
            <dd>{{ $documentationAndPhysicalExam->lymphatic }}</dd>
            <dt>Skin And Subcutaneous Tissue</dt>
            <dd>{{ $documentationAndPhysicalExam->skin_and_subcutaneus_tissue }}</dd>
            <dt>Back Extremities Musculoskeletal</dt>
            <dd>{{ $documentationAndPhysicalExam->back_musculoskeletal }}</dd>
            <dt>Neurological</dt>
            <dd>{{ $documentationAndPhysicalExam->neurological }}</dd>
            <dt>Psychiatric</dt>
            <dd>{{ $documentationAndPhysicalExam->psychiatric }}</dd>
            <dt>Observations (Patient)</dt>
            <dd>{{ $documentationAndPhysicalExam->observations }}</dd>
            <dt>Sign</dt>
            <dd>{{ $documentationAndPhysicalExam->sign }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('documentation_and_physical_exams.documentation_and_physical_exam.destroy', $documentationAndPhysicalExam->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('documentation_and_physical_exams.documentation_and_physical_exam.create') }}" class="btn btn-success" title="Create New Documentation And Physical Exam">
                                                <span class="feather icon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Documentation And Physical Exam" onclick="return confirm(&quot;Delete Documentation And Physical Exam??&quot;)">
                                                <span class="feather icon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection