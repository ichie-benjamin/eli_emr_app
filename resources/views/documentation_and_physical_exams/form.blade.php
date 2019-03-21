<div class="form-group {{ $errors->has('patient_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_name" class="block">Patient Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_name" type="text" id="patient_name" value="{{ old('patient_name', optional($documentationAndPhysicalExam)->patient_name) }}" minlength="1" placeholder="Enter patient name here...">
        {!! $errors->first('patient_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date_examined') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_examined" class="block">Date Examined</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_examined" type="text" id="date_examined" value="{{ old('date_examined', optional($documentationAndPhysicalExam)->date_examined) }}" placeholder="Enter date examined here...">
        {!! $errors->first('date_examined', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('preceptor_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="preceptor_name" class="block">Preceptor Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="preceptor_name" type="text" id="preceptor_name" value="{{ old('preceptor_name', optional($documentationAndPhysicalExam)->preceptor_name) }}" minlength="1" placeholder="Enter preceptor name here...">
        {!! $errors->first('preceptor_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('chief_complaint') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="chief_complaint" class="block">Chief Complaint</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="chief_complaint" cols="50" rows="10" id="chief_complaint" placeholder="Enter chief complaint here...">{{ old('chief_complaint', optional($documentationAndPhysicalExam)->chief_complaint) }}</textarea>
        {!! $errors->first('chief_complaint', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('history_of_illnes') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="history_of_illnes" class="block">History Of Present Illness</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="history_of_illnes" cols="50" rows="10" id="history_of_illnes" minlength="1" placeholder="Enter history of illnes here...">{{ old('history_of_illnes', optional($documentationAndPhysicalExam)->history_of_illnes) }}</textarea>
        {!! $errors->first('history_of_illnes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('past_medical_history') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="past_medical_history" class="block">Past Medical History</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="past_medical_history" cols="50" rows="10" id="past_medical_history" minlength="1" placeholder="Enter past medical history here...">{{ old('past_medical_history', optional($documentationAndPhysicalExam)->past_medical_history) }}</textarea>
        {!! $errors->first('past_medical_history', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('immunization') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="immunization" class="block">Immunization</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="immunization" type="text" id="immunization" value="{{ old('immunization', optional($documentationAndPhysicalExam)->immunization) }}" minlength="1" placeholder="Enter immunization here...">
        {!! $errors->first('immunization', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('phemonia') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="phemonia" class="block">Phemonia</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="phemonia" type="text" id="phemonia" value="{{ old('phemonia', optional($documentationAndPhysicalExam)->phemonia) }}" minlength="1" placeholder="Enter phemonia here...">
        {!! $errors->first('phemonia', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('t_dap') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="t_dap" class="block">TDap</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="t_dap" type="text" id="t_dap" value="{{ old('t_dap', optional($documentationAndPhysicalExam)->t_dap) }}" minlength="1" placeholder="Enter t dap here...">
        {!! $errors->first('t_dap', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('zoster') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="zoster" class="block">Zoster</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="zoster" type="text" id="zoster" value="{{ old('zoster', optional($documentationAndPhysicalExam)->zoster) }}" minlength="1" placeholder="Enter zoster here...">
        {!! $errors->first('zoster', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('family_history') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="family_history" class="block">Family History</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="family_history" cols="50" rows="10" id="family_history" minlength="1" placeholder="Enter family history here...">{{ old('family_history', optional($documentationAndPhysicalExam)->family_history) }}</textarea>
        {!! $errors->first('family_history', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('social_history') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="social_history" class="block">Social History</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="social_history" cols="50" rows="10" id="social_history" minlength="1" placeholder="Enter social history here...">{{ old('social_history', optional($documentationAndPhysicalExam)->social_history) }}</textarea>
        {!! $errors->first('social_history', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('h_t') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="h_t" class="block">HT</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="h_t" type="text" id="h_t" value="{{ old('h_t', optional($documentationAndPhysicalExam)->h_t) }}" minlength="1" placeholder="Enter h t here...">
        {!! $errors->first('h_t', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('w_t') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="w_t" class="block">WT</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="w_t" type="text" id="w_t" value="{{ old('w_t', optional($documentationAndPhysicalExam)->w_t) }}" minlength="1" placeholder="Enter w t here...">
        {!! $errors->first('w_t', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('b_m_i') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="b_m_i" class="block">BMI</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="b_m_i" type="text" id="b_m_i" value="{{ old('b_m_i', optional($documentationAndPhysicalExam)->b_m_i) }}" minlength="1" placeholder="Enter b m i here...">
        {!! $errors->first('b_m_i', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('temp') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="temp" class="block">Temp</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="temp" type="text" id="temp" value="{{ old('temp', optional($documentationAndPhysicalExam)->temp) }}" minlength="1" placeholder="Enter temp here...">
        {!! $errors->first('temp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pulse') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="pulse" class="block">Pulse</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="pulse" type="text" id="pulse" value="{{ old('pulse', optional($documentationAndPhysicalExam)->pulse) }}" minlength="1" placeholder="Enter pulse here...">
        {!! $errors->first('pulse', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('b_p') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="b_p" class="block">BP</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="b_p" type="text" id="b_p" value="{{ old('b_p', optional($documentationAndPhysicalExam)->b_p) }}" minlength="1" placeholder="Enter b p here...">
        {!! $errors->first('b_p', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('r_r') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="r_r" class="block">RR</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="r_r" type="text" id="r_r" value="{{ old('r_r', optional($documentationAndPhysicalExam)->r_r) }}" minlength="1" placeholder="Enter r r here...">
        {!! $errors->first('r_r', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pain') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="pain" class="block">Pain</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="pain" type="text" id="pain" value="{{ old('pain', optional($documentationAndPhysicalExam)->pain) }}" minlength="1" placeholder="Enter pain here...">
        {!! $errors->first('pain', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('head') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="head" class="block">Head</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="head" type="text" id="head" value="{{ old('head', optional($documentationAndPhysicalExam)->head) }}" minlength="1" maxlength="255" placeholder="Enter head here...">
        {!! $errors->first('head', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('eyes') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="eyes" class="block">Eyes</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="eyes" type="text" id="eyes" value="{{ old('eyes', optional($documentationAndPhysicalExam)->eyes) }}" minlength="1" placeholder="Enter eyes here...">
        {!! $errors->first('eyes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ears_nose_throat') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="ears_nose_throat" class="block">Ears/Nose/Throat</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="ears_nose_throat" type="text" id="ears_nose_throat" value="{{ old('ears_nose_throat', optional($documentationAndPhysicalExam)->ears_nose_throat) }}" minlength="1" placeholder="Enter ears nose throat here...">
        {!! $errors->first('ears_nose_throat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mouth') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="mouth" class="block">Mouth</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="mouth" type="text" id="mouth" value="{{ old('mouth', optional($documentationAndPhysicalExam)->mouth) }}" minlength="1" placeholder="Enter mouth here...">
        {!! $errors->first('mouth', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('neck') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="neck" class="block">Neck</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="neck" type="text" id="neck" value="{{ old('neck', optional($documentationAndPhysicalExam)->neck) }}" minlength="1" placeholder="Enter neck here...">
        {!! $errors->first('neck', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('respiratory') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="respiratory" class="block">Respiratory</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="respiratory" type="text" id="respiratory" value="{{ old('respiratory', optional($documentationAndPhysicalExam)->respiratory) }}" minlength="1" placeholder="Enter respiratory here...">
        {!! $errors->first('respiratory', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('cadio_vascular') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="cadio_vascular" class="block">CadioVascular</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="cadio_vascular" type="text" id="cadio_vascular" value="{{ old('cadio_vascular', optional($documentationAndPhysicalExam)->cadio_vascular) }}" minlength="1" placeholder="Enter cadio vascular here...">
        {!! $errors->first('cadio_vascular', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gastrointestinal') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="gastrointestinal" class="block">Gastrointestinal</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="gastrointestinal" type="text" id="gastrointestinal" value="{{ old('gastrointestinal', optional($documentationAndPhysicalExam)->gastrointestinal) }}" minlength="1" placeholder="Enter gastrointestinal here...">
        {!! $errors->first('gastrointestinal', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lymphatic') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="lymphatic" class="block">Lymphatic</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="lymphatic" type="text" id="lymphatic" value="{{ old('lymphatic', optional($documentationAndPhysicalExam)->lymphatic) }}" minlength="1" placeholder="Enter lymphatic here...">
        {!! $errors->first('lymphatic', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('skin_and_subcutaneus_tissue') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="skin_and_subcutaneus_tissue" class="block">Skin And Subcutaneous Tissue</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="skin_and_subcutaneus_tissue" type="text" id="skin_and_subcutaneus_tissue" value="{{ old('skin_and_subcutaneus_tissue', optional($documentationAndPhysicalExam)->skin_and_subcutaneus_tissue) }}" minlength="1" placeholder="Enter skin and subcutaneus tissue here...">
        {!! $errors->first('skin_and_subcutaneus_tissue', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('back_musculoskeletal') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="back_musculoskeletal" class="block">Back Extremities Musculoskeletal</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="back_musculoskeletal" type="text" id="back_musculoskeletal" value="{{ old('back_musculoskeletal', optional($documentationAndPhysicalExam)->back_musculoskeletal) }}" minlength="1" placeholder="Enter back musculoskeletal here...">
        {!! $errors->first('back_musculoskeletal', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('neurological') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="neurological" class="block">Neurological</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="neurological" type="text" id="neurological" value="{{ old('neurological', optional($documentationAndPhysicalExam)->neurological) }}" minlength="1" placeholder="Enter neurological here...">
        {!! $errors->first('neurological', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('psychiatric') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="psychiatric" class="block">Psychiatric</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="psychiatric" type="text" id="psychiatric" value="{{ old('psychiatric', optional($documentationAndPhysicalExam)->psychiatric) }}" minlength="1" placeholder="Enter psychiatric here...">
        {!! $errors->first('psychiatric', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('observations') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="observations" class="block">Observations (Patient)</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="observations" cols="50" rows="10" id="observations" minlength="1" placeholder="Enter observations here...">{{ old('observations', optional($documentationAndPhysicalExam)->observations) }}</textarea>
        {!! $errors->first('observations', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sign') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="sign" class="block">Sign</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="sign" type="text" id="sign" value="{{ old('sign', optional($documentationAndPhysicalExam)->sign) }}" minlength="1" placeholder="Enter sign here...">
        {!! $errors->first('sign', '<p class="help-block">:message</p>') !!}
    </div>
</div>

