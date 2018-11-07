@include('didyouknow::board.information.modals.view_personal_drafts')
@include('didyouknow::board.information.modals.edit_personal_drafts')
@include('didyouknow::board.information.modals.delete_article')


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
                                        {{-- View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-toggle="modal"
                                                data-target="#view_personal_drafts"
                                                data-title="{{$personal_draft->title}}"
                                                data-body="{{$personal_draft->body}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Bekijk
                                        </button>
                                        {{-- Edit the data in Modal --}}
                                        <button type="button" class="btn btn-warning"
                                                data-toggle="modal"
                                                data-target="#edit_personal_drafts"
                                                data-title="{{$personal_draft->title}}"
                                                data-body="{{$personal_draft->body}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Wijzig
                                        </button>
                                        {{-- Delete/archive the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-title="{{$personal_draft->title}}"
                                        >
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
                <i class="alert-ico fa fa-fw fa-exclamation"></i>Er staan geen concepten onder uw naam in de database.
            </div>
        @endif


    @endif
</div>