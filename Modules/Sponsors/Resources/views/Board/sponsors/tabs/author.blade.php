<div class="tab-pane" id="author" role="tabpanel">

    @if(isset($author_drafts))
        {{--{{dd( $author_drafts )}}--}}
        @if($author_drafts->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    {{--Test author--}}
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_title')
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_who')
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_creation_date')
                                </th>
                                <th>
                                    @lang('sponsors::board/tabs.tab_table_title_last_update')
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($author_drafts as $author_draft)

                            <tr>
                                <td>
                                    {{$author_draft->title}}
                                </td>
                                <td>
                                    <strong> @lang('sponsors::board/tabs.tab_nav_author') : </strong>
                                    {{$author_draft->getAuthorName($author_draft->author_group)}}
                                </td>
                                <td>
                                    {{$author_draft->created_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    {{$author_draft->updated_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php

                                        $author_draft_list=[
                                            	'id'            => $author_draft->id,
                                            	'title'         => $author_draft->title,

                                            	'body'          => htmlspecialchars_decode($author_draft->body),

                                            	'package'       => $author_draft->sponsor_packages_id,

                                            	'payment'       => $author_draft->payment_received,
                                            	'image_name'    => $author_draft->sponsor_image()->name,
                                            	'link'          => $author_draft->sponsor_link()->link

                                            ];

                                            $author_draft_modal = json_encode($author_draft_list, JSON_PRETTY_PRINT);


                                        @endphp
                                         {{--View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="Bekijk"
                                                data-toggle="modal"
                                                data-target="#view_author_drafts"
                                                data-info = "{{$author_draft_modal}}"
                                                >

                                            <i class="fa fa-eye" aria-hidden="true"></i>
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
                @lang('sponsors::board/tabs.tab_data_no_concepts')
            </div>
        @endif
    @endif

</div>