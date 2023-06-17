  <!-- Image viewer -->
  @include('components.image-viewer.body',['images'=>$record->images])
              
  <!-- Text Description -->
  @include('components.text-description.body',['record'=>$record])