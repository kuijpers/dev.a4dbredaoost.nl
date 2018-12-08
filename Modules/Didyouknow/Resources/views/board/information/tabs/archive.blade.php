@include('didyouknow::board.information.modals.view_archive')
@include('didyouknow::board.information.modals.edit_archive')
@include('didyouknow::board.information.modals.destroy_article')

<div class="tab-pane" id="archive" role="tabpanel">

    @if(isset($archived))
        {{--{{dd( $archived )}}--}}
        @if($archived->isNotEmpty())

            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>
                                @lang('didyouknow::board/tabs.tab_table_title_title')
                            </th>
                            <th>
                                @lang('didyouknow::board/tabs.tab_table_title_who')
                            </th>
                            <th>
                                @lang('didyouknow::board/tabs.tab_table_title_published')
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
                        @foreach($archived as $archive)

                            <tr>
                                <td>
                                    {{$archive->title}}
                                </td>
                                <td>
                                    <strong>@lang('didyouknow::board/tabs.tab_nav_author') :</strong>
                                    {{$archive->getAuthorName($archive->author_group)}}
                                    <br>
                                    <strong>@lang('didyouknow::board/tabs.tab_nav_editor') :</strong>
                                    {{$archive->getEditorName($archive->editor_group)}}
                                    <br>
                                    <strong>@lang('didyouknow::board/tabs.tab_nav_publisher') :</strong>
                                    {{$archive->getPublisherName($archive->publisher_group)}}
                                    <br>
                                </td>
                                <td>
                                    <strong>@lang('didyouknow::board/tabs.tab_table_title_published_from') :</strong>
                                    {{Carbon\Carbon::parse($archive->publish_date_start)->format('d-m-Y H:i:s')}}
                                    <br>
                                    <strong>@lang('didyouknow::board/tabs.tab_table_title_published_till') :</strong>
                                    @if(Carbon\Carbon::parse($archive->publish_date_end)->format('d-m-Y H:i:s')<= Carbon\Carbon::parse($archive->publish_date_start)->format('d-m-Y H:i:s'))
                                        @lang('didyouknow::board/tabs.tab_table_title_published_forever')
                                    @else
                                        {{Carbon\Carbon::parse($archive->publish_date_end)->format('d-m-Y H:i:s')}}
                                    @endif
                                </td>
                                <td>
                                    {{$archive->created_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    {{$archive->updated_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php
                                            if(Carbon\Carbon::parse($archive->publish_date_end)->format('d-m-Y H:i:s')<= Carbon\Carbon::parse($archive->publish_date_start)->format('d-m-Y H:i:s')){
                                                $end_date = __('didyouknow::board/tabs.tab_table_title_published_forever');
                                            }else{
                                                $end_date = Carbon\Carbon::parse($archive->publish_date_end)->format('d-m-Y H:i:s');
                                            }

                                            $archive_list=[
                                            	'id'        => $archive->id,
                                            	'title'     => $archive->title,
                                            	'body'      => $archive->body,
                                            	'author'    => $archive->getAuthorName($archive->author_group),
                                            	'editor'    => $archive->getEditorName($archive->editor_group),
                                            	'publisher' => $archive->getPublisherName($archive->publisher_group),
                                            	'start'     => Carbon\Carbon::parse($archive->publish_date_start)->format('d-m-Y H:i:s'),
                                            	'end'       => $end_date
                                            ];

                                        $archive_modal = json_encode($archive_list);

                                        @endphp
                                        {{-- View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_view')"
                                                data-toggle="modal"
                                                data-target="#view_archive"
                                                data-info = "{{$archive_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        {{-- Edit the data in Modal --}}
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_edit')"
                                                data-toggle="modal"
                                                data-target="#edit_archive"
                                                data-info = "{{$archive_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        {{-- Delete/archive the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_delete')"
                                                data-toggle="modal"
                                                data-target="#destroy_article"
                                                data-title="{{$archive ->title}}"
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
                @lang('didyouknow::board/tabs.tab_data_no_data')
            </div>
        @endif

    @endif
</div>