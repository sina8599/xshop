</div>
@yield('custom-foot')
<input type="hidden" id="api-display-url" value="{{route('v1.visitor.display')}}">
<input type="hidden" id="api-fav-toggle" value="{{route('client.client.product-fav-toggle','')}}/">

{{--@if(auth()->check() && auth()->user()->hasRole('developer') && !request()->has('ediable'))--}}
{{--<a id="do-edit" href="?ediable">--}}
{{--    <i class="ri-settings-2-line"></i>--}}
{{--</a>--}}
{{--@endif--}}

</body>
</html>
