{{ csrf_field() }}




<button type="button" 
class="btn btn-primary add_more_articles bmd-btn-fab">
    <i class="material-icons">grade</i>
  </button>

    <div class="form-group">
      <label 
      for="title" 
      class="bmd-label-floating">
      Title
    </label>

      <input 
      type="text" 
      class="form-control" 
      id="title"
      name= "title"
      value="{{ old('title', $post->title ?? NULL) }}"
      >
      
    </div>

    <div class="form-group">
        <label 
        for="description" 
        class="bmd-label-floating">
        Description
      </label>
  
        <input 
        type="text" 
        class="form-control" 
        id="description"
        name="description"
        value="{{ old('description', $post->description ?? NULL) }}"
        >
        
      </div>

      <br/>
      <h5>Articulos</h5>
        <table class="table table-striped" >
        <thead>
            <th>Titulo Articulo</th>
            <th>Description Articulo</th>
            <th></th>
        </thead>
        <tbody>
          @isset($articles)
            @foreach ($post->articles as $article)
                @include('posts/partials/_article', ['article' => $article])
            @endforeach
          @else
            @include('posts/partials/_article', ['article' => null])
          @endisset
        </tbody>
        </table>

      <button type="submit" class="btn btn-primary btn-raised">Submit</button>
  

  
   
    
    