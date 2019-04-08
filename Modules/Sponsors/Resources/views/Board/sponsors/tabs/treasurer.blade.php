<div class="tab-pane" id="treasurer" role="tabpanel">

    {{--@if(isset($editor_approved))--}}
        {{--@if($editor_approved->isNotEmpty())--}}
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    Test treasurer
                    {{--<table class="table table-condensed">--}}
                        {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>--}}
                                    {{--@lang('sponsors::board/tabs.tab_table_title_title')--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--@lang('sponsors::board/tabs.tab_table_title_who')--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--@lang('sponsors::board/tabs.tab_table_title_creation_date')--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--@lang('sponsors::board/tabs.tab_table_title_last_update')--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--&nbsp;--}}
                                {{--</th>--}}
                            {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--@foreach($editor_approved as $editor_approve)--}}

                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--{{$editor_approve->title}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<strong>@lang('sponsors::board/tabs.tab_nav_author') :</strong>--}}
                                    {{--{{$editor_approve->getAuthorName($editor_approve->author_group)}}--}}
                                    {{--<br>--}}
                                    {{--<strong>@lang('sponsors::board/tabs.tab_nav_editor') :</strong>--}}
                                    {{--@if(!empty($editor_approve->editor))--}}
                                        {{--{{$editor_approve->getEditorName($editor_approve->editor_group)}}--}}
                                    {{--@endif--}}
                                    {{--<br>--}}
                                    {{--<strong>@lang('sponsors::board/tabs.tab_nav_publisher') :</strong>--}}
                                    {{--@if(!empty($editor_approve->publisher))--}}
                                        {{--{{$editor_approve->getPublisherName($editor_approve->publisher_group)}}--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$editor_approve->created_at->format('d-m-Y H:m:i')}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{$editor_approve->updated_at->format('d-m-Y H:m:i')}}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<div class="btn-group btn-group-xs" role="group">--}}
                                        {{--@php--}}
                                            {{--$editor_approve_list=[--}}
                                            	{{--'id'        => $editor_approve->id,--}}
                                            	{{--'title'     => $editor_approve->title,--}}
                                            	{{--'body'      => $editor_approve->body,--}}
                                            	{{--'author'    => $editor_approve->getAuthorName($editor_approve->author_group),--}}
                                            	{{--'editor'    => $editor_approve->getEditorName($editor_approve->editor_group),--}}
                                            	{{--'publisher' => $editor_approve->getPublisherName($editor_approve->publisher_group),--}}
                                            {{--];--}}

                                        {{--$editor_approve_modal = json_encode($editor_approve_list);--}}

                                        {{--@endphp--}}
                                        {{-- View the data in Modal--}}
                                        {{--<button type="button" class="btn btn-info"--}}
                                                {{--data-hoover="tooltip"--}}
                                                {{--title="@lang('sponsors::board/buttons.tab_tooltip_view')"--}}
                                                {{--data-toggle="modal"--}}
                                                {{--data-target="#view_editor_approved"--}}
                                                {{--data-info = "{{$editor_approve_modal}}"--}}
                                        {{-->--}}
                                            {{--<i class="fa fa-eye" aria-hidden="true"></i>--}}
                                        {{--</button>--}}
                                        {{-- Edit the data in Modal --}}
                                        {{--<button type="button" class="btn btn-warning"--}}
                                                {{--data-hoover="tooltip"--}}
                                                {{--title="@lang('sponsors::board/buttons.tab_tooltip_edit')"--}}
                                                {{--data-toggle="modal"--}}
                                                {{--data-target="#edit_editor_approved"--}}
                                                {{--data-info = "{{$editor_approve_modal}}"--}}
                                        {{-->--}}
                                            {{--<i class="fa fa-eye" aria-hidden="true"></i>--}}
                                        {{--</button>--}}
                                        {{-- Delete/archive the data thru Modal--}}
                                        {{--<button type="button" class="btn btn-danger"--}}
                                                {{--data-hoover="tooltip"--}}
                                                {{--title="@lang('sponsors::board/buttons.tab_tooltip_delete')"--}}
                                                {{--data-toggle="modal"--}}
                                                {{--data-target="#delete_article"--}}
                                                {{--data-info = "{{$editor_approve_modal}}"--}}
                                        {{-->--}}
                                            {{--<i class="fa fa-trash-o" aria-hidden="true"></i>--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr>--}}

                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                </div>
            </div>
        {{--@else--}}
            {{--<div class="alert alert-info text-center" role="alert">--}}
                {{--<i class="alert-ico fa fa-fw fa-exclamation"></i>--}}
                {{--@lang('sponsors::board/tabs.tab_data_no_data')--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--@endif--}}

</div>