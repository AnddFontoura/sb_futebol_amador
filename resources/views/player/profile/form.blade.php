@extends('layouts.system')

@section('main_system')

    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ url('player/information/profile') }}" class="btn btn-primary float-right"> {{ __('basic.navigation.view') }} {{ __('profile.name') }} </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6 mb-3 form-group">
                    <label> {{ 'profile.form.background' }} </label>
                    <input type="file" class="form-control" name="profileBackground">
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6 mb-3 form-group">
                    <label> {{ 'profile.form.profile_photo' }} </label>
                    <input type="file" class="form-control" name="profilePhoto">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 form-group">
                    <label> {{ 'profile.form.full_name' }} </label>
                    <input type="text" class="form-control" name="profileFullName" max="254">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 form-group">
                    <label> {{ 'profile.form.nickname' }} </label>
                    <input type="text" class="form-control" name="profileNickName" max="254">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'profile.form.states' }} </label>
                    <select class="form-control" name="profileState">

                    </select>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'profile.form.cities' }} </label>
                    <select class="form-control" name="profileState">

                    </select>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'profile.form.birthdate' }} </label>
                    <input type="date" class="form-control" name="profileBirthDate">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'profile.form.player_role' }} </label>
                    <input type="checkbox" class="form-control mb-3" value="" name="profilePlayerRole[]">
                    <input type="checkbox" class="form-control mb-3" value="" name="profilePlayerRole[]">
                    <input type="checkbox" class="form-control mb-3" value="" name="profilePlayerRole[]">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'basic.social_media.instagram' }} </label>
                    <input type="text" class="form-control" name="profileInstagram">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'basic.social_media.facebook' }} </label>
                    <input type="text" class="form-control" name="profileInstagram">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'basic.social_media.twitter' }} </label>
                    <input type="text" class="form-control" name="profileInstagram">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'basic.social_media.linkedin' }} </label>
                    <input type="text" class="form-control" name="profileInstagram">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 mb-3 form-group">
                    <label> {{ 'basic.social_media.youtube' }} </label>
                    <input type="text" class="form-control" name="profileInstagram">
                </div>

                <div class="col-12 mb-3 text-justify">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dolor tellus, fermentum et odio non, elementum euismod ipsum.
                        Mauris quis dui egestas, vestibulum ligula vel, sodales magna. Ut mi ipsum, laoreet eu vulputate eget, cursus id ante.
                        Donec rutrum metus urna. Fusce in lectus in augue posuere consequat in quis sapien. Sed eget metus vel leo elementum
                        suscipit ut vel est. Pellentesque libero libero, commodo quis efficitur sed, finibus id arcu. Ut eget lectus vestibulum,
                        accumsan dui id, scelerisque ipsum. Etiam porta iaculis nulla eget faucibus. Orci varius natoque penatibus et magnis dis
                        parturient montes, nascetur ridiculus mus. Quisque in maximus nulla. Nam sit amet ultrices lorem. Nulla tincidunt sed dolor
                        et viverra. Suspendisse a est nec elit luctus volutpat nec eget augue. Orci varius natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus. Suspendisse maximus velit est, id accumsan lectus blandit vel.</p>

                    <p> Duis porta porttitor augue non lacinia. Sed dapibus sem eget feugiat tristique. Suspendisse elementum eleifend leo sed porttitor.
                        In lacinia nisi dui, ac sodales arcu porttitor eget. Integer tristique pretium purus in dapibus. Pellentesque felis lectus,
                        elementum at tincidunt non, fringilla eget ligula. Praesent nec blandit nisl. Nunc a auctor dui, vel hendrerit libero. Curabitur
                        mollis urna ac metus aliquet, quis ultrices metus faucibus. Nulla vel dictum lorem, ac ullamcorper dolor.</p>

                    <p>    Morbi ut metus a dolor pharetra consectetur. Aliquam vulputate elit ut eros finibus auctor. Vestibulum ante ipsum primis in
                        faucibus orci luctus et ultrices posuere cubilia curae; Donec non magna in tellus tempus volutpat vulputate eu tortor.
                        In dictum pretium scelerisque. Curabitur maximus egestas fermentum. In ex sapien, malesuada vitae dolor in, sagittis molestie
                        risus. Nam tincidunt sapien et malesuada ultricies. In fermentum vehicula leo et dictum. In massa neque, congue vitae enim sed,
                        finibus venenatis arcu. Sed risus augue, tempor id volutpat non, ullamcorper ut risus. Donec convallis enim accumsan tristique
                        cursus. Nunc iaculis nunc vitae convallis imperdiet. Mauris pulvinar aliquam risus finibus bibendum. Etiam quis orci et lorem
                        malesuada porttitor eu eget ligula. Sed posuere ipsum ut elit placerat iaculis.</p>

                    <p>    Sed faucibus scelerisque metus, sed rhoncus tortor commodo sed. In in varius ipsum. In eget metus rutrum, elementum massa id,
                        tempus justo. Nunc bibendum hendrerit hendrerit. Cras justo ligula, tristique sed commodo vitae, bibendum eu mauris. Donec pretium,
                        libero sed molestie hendrerit, ex lacus sodales massa, ut rutrum lacus ipsum sit amet metus. Nunc id dui nisi. Donec rutrum mi
                        quis ultrices pellentesque. Maecenas dictum accumsan maximus. Integer erat dolor, elementum quis fringilla eget, fermentum vel
                        nibh. Nulla sed mauris eu dolor egestas mollis. Cras vitae nisl velit. Nulla varius nisi ornare urna accumsan feugiat dapibus nec
                        urna.</p>

                    <p> Morbi auctor nunc bibendum diam convallis, ut sollicitudin neque gravida. Phasellus ipsum sem, sodales ut lacinia eget, lacinia ac
                        sem. Curabitur et lectus id nibh tempus luctus id non lorem. Fusce in ligula vitae dolor tempor scelerisque. Phasellus condimentum
                        purus lacus. Cras sodales sit amet tortor eu vulputate. Pellentesque accumsan vel ligula laoreet pretium. Morbi nisl metus, finibus
                        et ipsum sed, convallis bibendum felis. Aliquam eleifend nec sapien non congue. In vel metus eu diam ullamcorper congue a non diam.
                        Suspendisse ultrices placerat ipsum, eget dapibus ipsum gravida at. Integer non aliquam sem, vitae cursus dui. Pellentesque tortor
                        lacus, iaculis ut justo sit amet, convallis venenatis eros. </p>
                </div>
            </div>
        </div>
    </div>

@endsection
