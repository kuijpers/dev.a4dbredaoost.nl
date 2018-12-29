<div class="tab-pane active" id="draft" role="tabpanel">
    @if(isset($personal_drafts))
        {{--{{dd( $personal_drafts )}}--}}
        @if($personal_drafts->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_title')
                                </th>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_creation_date')
                                </th>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_last_update')
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
                                    {{$personal_draft->created_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    {{$personal_draft->updated_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php

                                            $personal_draft_list=[
                                            	'id'        => $personal_draft->id,
                                            	'title'     => $personal_draft->title,
                                            	'body'      => $personal_draft->body,
                                            ];

                                            $personal_draft_modal = json_encode($personal_draft_list);

                                        @endphp
                                        {{-- View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_view')"
                                                data-toggle="modal"
                                                data-target="#view_personal_drafts"
                                                data-info = "{{$personal_draft_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>

                                        {{-- Edit the data in Modal --}}
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_edit')"
                                                data-toggle="modal"
                                                data-target="#edit_personal_drafts"
                                                data-info = "{{$personal_draft_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>

                                        {{-- Delete/archive the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_delete')"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-info = "{{$personal_draft_modal}}"
                                        >
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
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
                <i class="alert-ico fa fa-fw fa-exclamation"></i>
                @lang('didyouknow::board/tabs.tab_data_no_concepts')
            </div>
        @endif


    @endif
</div>