 @foreach ($languages as $language)
     <div class="flex items-center gap-2 bg-zinc-900 p-2 rounded text-white">
         <input type="checkbox" id="lang-{{ $language->id }}" name="languages[]" value="{{ $language->id }}"
             class="ui-checkbox">
         <label for="lang-{{ $language->name }}" class="ml-2 text-sm font-medium text-white">{{ $language->name }}</label>
     </div>
 @endforeach
