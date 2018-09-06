<tr>
    <td>
        <div class="form-group">
            <label 
            for="articles[{{ $article->id ?? 1 }}][title]" 
            class="bmd-label-floating">
            Title
            </label>
        
            <input 
            type="text" 
            class="form-control" 
            id="articles[{{ $article->id ?? 1 }}][title]"
            name="articles[{{ $article->id ?? 1 }}][title]"
            value="{{ old('title', $article->title ?? NULL) }}"
            >
            
            </div>
    </td>
    <td>
        <div class="form-group">
            <label 
            for="articles[{{ $article->id ?? 1 }}][description]" 
            class="bmd-label-floating">
            Description
            </label>
        
            <input 
            type="text" 
            class="form-control" 
            id="description"
            name="articles[{{ $article->id ?? 1 }}][description]"
            value="{{ old('description', $article->description ?? NULL) }}"
            >
            
            </div>
    </td>
    <td>
        <input 
        type="hidden" 
        class="form-control" 
        name="_destroy"
        >
        <button type="button" 
            class="btn btn-primary add_more_articles bmd-btn-fab">
                <i class="material-icons">grade</i>
        </button>

        </div>
    </td>
</tr>