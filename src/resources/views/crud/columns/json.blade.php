@push('crud_fields_styles')
<link rel="stylesheet" href="{{ asset('packages/json-viewer/json-viewer.css') }}">
@endpush

<div id="json"></div>

@push('crud_fields_scripts')
<script src="{{ asset('packages/json-viewer/json-viewer.js') }}"></script>
<script>
    var jsonViewer = new JSONViewer();
    document.querySelector("#json").appendChild(jsonViewer.getContainer());
    jsonViewer.showJSON(@json($entry), -1, -1);
</script> 
@endpush