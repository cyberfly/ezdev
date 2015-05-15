<?php

// create a link with boostrap icon
//eg : {{  icon_link_to_route('<i class="fa fa-pencil"></i>' ,'admin.packages.edit', '', array($package->id), array('class'=>'btn btn-primary btn-xs')) }}

function icon_link_to_route($icon, $route, $title = null, $parameters = array(), $attributes = array())
{
    $url = route($route, $parameters);

    $title = (is_null($title)) ? $url : e($title);

    $attributes = HTML::attributes($attributes);

    $title = $icon . $title;

    return '<a href="'.$url.'"'.$attributes.'>'.$title.'</a>';
}


// <a href="linkroute" class="btn btn-shadow btn-info">Create Packages</a>

function create_link_route($route, $title = null)
{
    $url = route($route);

    $title = (is_null($title)) ? $url : e($title);

    return '<a href="'.$url.'" class="btn btn-shadow btn-info" ><i class="fa fa-plus-circle"></i> '.$title.'</a>';
}

// create an edit link with icon on table row
// manual : <a href="{{ URL::to('edit_package') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
//eg : {{  edit_link_route('admin.packages.edit', '', array($package->id)) }}

function edit_link_route($route, $title = null, $parameters = array())
{
    $url = route($route, $parameters);

    $title = (is_null($title)) ? $url : e($title);

    return '<a href="'.$url.'" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i> '.$title.'</a>';
}

// create an delete link with icon on table row
// manual : <a href="{{ URL::to('delete_package') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
//eg : {{  delete_link_route('admin.packages.edit', '', array($package->id)) }}

function delete_link_route($route, $title = null, $parameters = array())
{
    $url = route($route, $parameters);

    $title = (is_null($title)) ? $url : e($title);

    $token = csrf_token();

    return '<a href="'.$url.'" data-token="'.$token.'" class="delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i> '.$title.'</a>';
}

// bootstrap form validation helpers

/**
*add has-error to form-group
* @param string $key key/name of input field being checked
* @param object $errors just passing the global $errors variable to the function
*/
function set_error($key, $errors)
{
    return $errors->has($key) ? 'has-error' : '';
}

/**
* get error message and add to a help-block
* @param string $key key/name of input field being checked
* @param object $errors just passing the global $errors variable to the function
*/
function get_error($key, $errors)
{
    return $errors->has($key) ? $errors->first($key, '<span class="help-block">:message</span>'): '';
}
