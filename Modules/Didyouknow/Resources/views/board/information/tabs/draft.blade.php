@include('didyouknow::board.information.modals.view_author_drafts')

<div class="tab-pane active" id="draft" role="tabpanel">
    @if(isset($personal_drafts))
        {{--{{dd( $personal_drafts )}}--}}
        @if($personal_drafts->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                Titel
                            </th>
                            <th>
                                Datum aangemaakt
                            </th>
                            <th>
                                Laatste update
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($personal_drafts as $personal_draft)

                            <tr>
                                <td>
                                    {{$personal_draft->title}}
                                </td>
                                <td>
                                    {{$personal_draft->created_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    {{$personal_draft->updated_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Bekijk
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            Wijzig
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            Verwijder
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center" role="alert">
                <i class="alert-ico fa fa-fw fa-exclamation"></i>Er staan geen drafts onder uw naam in de database.
            </div>
        @endif


    @endif
</div>