<div class="form-group {{set_error('package_name', $errors)}}">
    <label for="package_name" class="control-label col-lg-2">Package Name</label>
    <div class="col-lg-10">
        {{  Form::text('package_name', null, array('class' => 'form-control', 'id' => 'package_name'))  }}
        {{ get_error('package_name', $errors) }}
    </div>
</div>

<div class="form-group {{set_error('package_description', $errors)}}">
    <label for="package_description" class="control-label col-lg-2">Package Description</label>
    <div class="col-lg-10">
        {{  Form::textarea('package_description', null, array('class' => 'form-control', 'id' => 'package_description'))  }}
        {{ get_error('package_description', $errors) }}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button class="btn btn-danger" type="submit">Save</button>
        <a href="{{ URL::route('admin.packages.index') }}" class="btn btn-default" >Cancel</a>
    </div>
</div>