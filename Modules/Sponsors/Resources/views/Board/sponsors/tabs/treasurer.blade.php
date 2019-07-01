<div class="tab-pane" id="treasurer" role="tabpanel">

    {{--{{$unpaid_invoices}}--}}

    @if(isset($unpaid_invoices))
        @if($unpaid_invoices->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    {{--Test treasurer--}}
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
                        @foreach($unpaid_invoices as $unpaid_invoice)

                            <tr>
                                <td>
                                    {{$unpaid_invoice->title}}
                                </td>
                                <td>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_author') :</strong>
                                    {{$unpaid_invoice->getAuthorName($unpaid_invoice->author_group)}}
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_editor') :</strong>
                                    @if(!empty($unpaid_invoice->editor))
                                        {{$unpaid_invoice->getEditorName($unpaid_invoice->editor_group)}}
                                    @endif
                                    <br>
                                    <strong>@lang('sponsors::board/tabs.tab_nav_publisher') :</strong>
                                    @if(!empty($unpaid_invoice->publisher))
                                        {{$unpaid_invoice->getPublisherName($unpaid_invoice->publisher_group)}}
                                    @endif
                                </td>
                                <td>
                                    {{$unpaid_invoice->created_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    {{$unpaid_invoice->updated_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php
                                            $unpaid_invoice_list=[
                                            	'id'            => $unpaid_invoice->id,
                                            	'title'         => $unpaid_invoice->title,

                                            	'body'          => htmlspecialchars_decode($unpaid_invoice->body),

                                            	'package'       => $unpaid_invoice->sponsor_packages_id,

                                            	'payment'       => $unpaid_invoice->payment_received,
                                            	'image_name'    => $unpaid_invoice->sponsor_image()->name,
                                            	'link'          => $unpaid_invoice->sponsor_link()->link,

                                            	'author'        => $unpaid_invoice->getAuthorName($unpaid_invoice->author_group),
                                            	'editor'        => $unpaid_invoice->getEditorName($unpaid_invoice->editor_group),

                                            ];

                                        $unpaid_invoice_modal = json_encode($unpaid_invoice_list, JSON_PRETTY_PRINT);

                                        @endphp
                                         {{--View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="@lang('sponsors::board/buttons.tab_tooltip_view')"
                                                data-toggle="modal"
                                                data-target="#view_treasurer_unpaid"
                                                data-info = "{{$unpaid_invoice_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'treasurer']))
                                         {{--Edit the data in Modal--}}
                                            <button type="button" class="btn btn-warning"
                                                    data-hoover="tooltip"
                                                    title="@lang('sponsors::board/buttons.tab_tooltip_edit')"
                                                    data-toggle="modal"
                                                    data-target="#edit_treasurer_unpaid"
                                                    data-info = "{{$unpaid_invoice_modal}}"
                                            >
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                             {{--Delete/archive the data thru Modal--}}
                                            <button type="button" class="btn btn-danger"
                                                    data-hoover="tooltip"
                                                    title="@lang('sponsors::board/buttons.tab_tooltip_delete')"
                                                    data-toggle="modal"
                                                    data-target="#delete_article"
                                                    data-info = "{{$unpaid_invoice_modal}}"
                                            >
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        @endif
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