<tr>
	<td>{{$data->words}}</td>
	<td>{{$data->meanings}}</td>
	<td>
		<a href="/edit/{{$data->id}}">
			<button id="modaledit" type="button" class="btn btn-danger" data-toggle="modal">
          		編集
        	</button>
        </a>
	</td>
	<td>
		<!-- Button trigger modal -->
        <button id="modaldelete" type="button" name="contact" onclick="return confirm_delete();" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalPreview{{$data->id}}">
          削除
        </button>
	</td>
</tr>

<div id="popup">
<!-- Modal -->
	<div class="modal fade right" id="exampleModalPreview{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
  	  		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalPreviewLabel{{$data->id}}">Check!!</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
                <div class="modal-body">

                    選択した内容を削除します。

                </div>
      			<div class="modal-footer">
          			<form action="/delete/{{$data->id}}" method="post">
          				{{ csrf_field() }}
      					<input type="hidden" name="id" value="{{$data->id}}">
          				<input type="submit" value="削除">
      	  			</form>
      			</div>
 			</div>
		</div>
<!-- Modal -->
	</div>
</div>

