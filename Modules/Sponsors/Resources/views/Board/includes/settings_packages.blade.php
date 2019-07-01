<div class="col-md-4">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Sponsor packages</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-6 col-md-offset-6 margin-top-md">
                <button type="button" id="add_package" class="btn btn-default">
                    Add package
                </button>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($packages as $package)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-{{ $package->id }}">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $package->id }}" aria-expanded="false" aria-controls="collapse-{{ $package->id }}">
                                    {{ $package->name }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-{{ $package->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $package->id }}">
                            <div class="panel-body">

                                <table class="table table-hover table-condensed">
                                    <tbody>
                                    <tr>
                                        <td>
                                            Titel veld
                                        </td>
                                        <td>
                                            @if($package->title_field)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tekst veld
                                        </td>
                                        <td>
                                            @if($package->text_field)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Afbeelding veld
                                        </td>
                                        <td>
                                            @if($package->image_field)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Footer veld
                                        </td>
                                        <td>
                                            @if($package->footer_field)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Linked titel
                                        </td>
                                        <td>
                                            @if($package->linked_title)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Linked Footer
                                        </td>
                                        <td>
                                            @if($package->linked_footer)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Linked afbeelding
                                        </td>
                                        <td>
                                            @if($package->linked_image)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Eigen logo
                                        </td>
                                        <td>
                                            @if($package->own_logo)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Maximum karakters
                                        </td>
                                        <td>
                                            {{$package->max_text_char}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <button type="button" id="update_package" class="btn btn-default">
                                                Update package
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>