
{{get_edu_worker start=31 end=40 assign='data' }}
{{foreach from=$data item=i}}
	<li>我叫<a href="javascript:alert('我的id是:{{$i.id}}')">{{$i.name}}</a></li>
{{/foreach}}
