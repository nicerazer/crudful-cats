<ul>
   @foreach( $cats as $cat )
      <li>
          <a 
             href="/cats/{{ $cat->id }}/edit"
             class="btn btn-outline-light"
          >
            {{ $cat->name }}
          </a>
      </li>
   @endforeach
</ul>