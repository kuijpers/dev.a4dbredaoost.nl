<div class="tab-pane" id="garbage" role="tabpanel">

    @if(isset($trashed))
        {{--{{dd( $trashed )}}--}}
        @if($trashed->isNotEmpty())

            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    Test garbage

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
                                @lang('sponsors::board/tabs.tab_table_title_published')
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
                        @foreach($trashed as $trash)

                            <tr>
                                <td>
                                    {{$trash->title}}
                                </td>
                                <td>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_author') :</strong>
                                    {{$trash->getAuthorName($trash->author_group)}}
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_editor') :</strong>
                                    {{$trash->getEditorName($trash->editor_group)}}
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_publisher') :</strong>
                                    {{$trash->getPublisherName($trash->publisher_group)}}
                                    <br>
                                </td>
                                <td>
                                    <strong>@lang('sponsors::board/tabs.tab_table_title_published_from') :</strong>
                                    {{Carbon\Carbon::parse($trash->publish_date_start)->format('d-m-Y H:i:s')}}
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_table_title_published_till') :</strong>
                                    @if(Carbon\Carbon::parse($trash->publish_date_end)->format('d-m-Y H:i:s')<= Carbon\Carbon::parse($trash->publish_date_start)->format('d-m-Y H:i:s'))
                                        @lang('sponsors::board/tabs.tab_table_title_published_forever')
                                    @else
                                        {{Carbon\Carbon::parse($trash->publish_date_end)->format('d-m-Y H:i:s')}}
                                    @endif
                                </td>
                                <td>
                                    {{$trash->created_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    {{$trash->updated_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php

                                            if($trash->publish_date_start == 0){
                                                $start_date = __('sponsors::board/tabs.tab_table_title_published_not_set');
                                                $end_date   = __('sponsors::board/tabs.tab_table_title_published_not_set');
                                            }elseif(Carbon\Carbon::parse($trash->publish_date_end)->format('d-m-Y H:i:s')<= Carbon\Carbon::parse($trash->publish_date_start)->format('d-m-Y H:i:s')){
                                                $start_date = Carbon\Carbon::parse($trash->publish_date_start)->format('d-m-Y H:i:s');
                                                $end_date = __('sponsors::board/tabs.tab_table_title_published_forever');
                                            }else{
                                                $start_date = Carbon\Carbon::parse($trash->publish_date_start)->format('d-m-Y H:i:s');
                                                $end_date = Carbon\Carbon::parse($trash->publish_date_end)->format('d-m-Y H:i:s');
                                            }

                                            $trash_list=[
                                            	'id'        => $trash->id,
                                            	'title'     => $trash->title,
                                            	'body'      => $trash->body,
                                            	'author'    => $trash->getAuthorName($trash->author_group),
                                            	'editor'    => $trash->getEditorName($trash->editor_group),
                                            	'publisher' => $trash->getPublisherName($trash->publisher_group),
                                            	'start'     => $start_date,
                                            	'end'       => $end_date
                                            ];

                                        $trash_modal = json_encode($trash_list);

                                        @endphp
                                         {{--View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="@lang('sponsors::board/buttons.tab_tooltip_view')"
                                                data-toggle="modal"
                                                data-target="#view_trash"
                                                data-info = "{{$trash_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                         {{--Edit the data in Modal --}}
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="@lang('sponsors::board/buttons.tab_tooltip_edit')"
                                                data-toggle="modal"
                                                data-target="#edit_trash"
                                                data-info = "{{$trash_modal}}"
                                        >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>

                                         {{--Delete/trash the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="@lang('sponsors::board/buttons.tab_tooltip_delete')"
                                                data-toggle="modal"
                                                data-target="#destroy_article"
                                                data-info = "{{$trash_modal}}"
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
                @lang('sponsors::board/tabs.tab_data_no_data')
            </div>
        @endif

    @endif
</div>