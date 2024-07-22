<div>
  <!-- Sidebar backdrop (mobile only) -->
  <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
    :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

  <!-- Sidebar -->
  <div id="sidebar"
    class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
    @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

    <!-- Sidebar header -->
    <div class="flex justify-between mb-10 pr-3 sm:px-2">
      <!-- Close button -->
      <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
        aria-controls="sidebar" :aria-expanded="sidebarOpen">
        <span class="sr-only">Close sidebar</span>
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
        </svg>
      </button>
      <!-- Logo -->
      <a class="block" href="{{ route('mensajes.index') }}">
        <img src="{{asset('images/svg/logoblancoheader.svg')}}" />
      </a>
    </div>

    <!-- Links -->
    <div class="space-y-8">
      <!-- Pages group -->
      <div>
        <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
          <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
            aria-hidden="true">•••</span>
          <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Landing AgenciaPapaya</span>
        </h3>
        <ul class="mt-3">

          <!-- Messages -->
          @role('Customer')
              <li
                class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['mensajes'])) {{ 'bg-slate-900' }} @endif">
                <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['mensajes'])) {{ 'hover:text-slate-200' }} @endif"
                  href="{{ route('mensajes.index') }}">
                  <div class="flex items-center justify-between">
                    <div class="grow flex items-center">
                      <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path
                          class="fill-current @if (in_array(Request::segment(2), ['mensajes'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                          d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                        <path
                          class="fill-current @if (in_array(Request::segment(2), ['mensajes'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                          d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                      </svg>
                      <span
                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Mensajes</span>
                    </div>
                    <!-- Badge -->
                    <div class="flex flex-shrink-0 ml-2">
                      @if ($mensajes !== 0)
                        <span
                        class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-indigo-500 px-2 rounded">
                        {{ $mensajes }}
                        </span>
                      @endif
                      
                    </div>
                  </div>
                </a>
              </li>
          @endrole




            <!-- Shortcode -->

          @role('Admin')
            <li
              class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['shortcode'])) {{ 'bg-slate-900' }} @endif">
              <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['shortcode'])) {{ 'hover:text-slate-200' }} @endif"
                href="{{ route('shortcode.edit', 1) }}">
                <div class="flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path
                      class="fill-current @if (in_array(Request::segment(2), ['shortcode'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M1 3h22v20H1z" />
                    <path
                      class="fill-current @if (in_array(Request::segment(2), ['shortcode'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                      d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                  </svg>
                  <span
                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Códigos cortos</span>
                </div>
              </a>
            </li>
          @endrole



          <!-- Suscripciones -->

          {{-- <li
            class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['suscripcion'])) {{ 'bg-slate-900' }} @endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['suscripcion'])) {{ 'hover:text-slate-200' }} @endif"
              href="{{ route('subscripciones') }}">
              <div class="flex items-center justify-between">
                <div class="grow flex items-center">
                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                    <path
                      class="fill-current @if (in_array(Request::segment(2), ['suscripcion'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                      d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                    <path
                      class="fill-current @if (in_array(Request::segment(2), ['suscripcion'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                      d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                  </svg>
                  <span
                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Suscriptores</span>
                </div>
              </div>
            </a>
          </li> --}}

          <!-- Datos generales -->
          {{-- <li
            class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['datosgenerales'])) {{ 'bg-slate-900' }} @endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['datosgenerales'])) {{ 'hover:text-slate-200' }} @endif"
              href="{{ route('datosgenerales.edit', 1) }}">
              <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['datosgenerales'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                    d="M1 3h22v20H1z" />
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['datosgenerales'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                    d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span
                  class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Datos
                  Generales</span>
              </div>
            </a>
          </li> --}}

        


          {{-- <!-- Servicios -->
          <li
            class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['servicios'])) {{ 'bg-slate-900' }} @endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['servicios'])) {{ 'hover:text-slate-200' }} @endif"
              href="{{ route('servicios.index') }}">
              <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['servicios'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                    d="M1 3h22v20H1z" />
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['servicios'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                    d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span
                  class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Servicios</span>
              </div>
            </a>
          </li> --}}


          {{-- <!-- Testimony -->
          <li
            class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['testimonios'])) {{ 'bg-slate-900' }} @endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['testimonios'])) {{ 'hover:text-slate-200' }} @endif"
              href="{{ route('testimonios.index') }}">
              <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['testimonios'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                    d="M1 3h22v20H1z" />
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['testimonios'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                    d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span
                  class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Testimonios</span>
              </div>
            </a>
          </li> --}}

{{-- 
          <!-- Category -->
          <li
            class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['categorias'])) {{ 'bg-slate-900' }} @endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['categorias'])) {{ 'hover:text-slate-200' }} @endif"
              href="{{ route('categorias.index') }}">
              <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['categorias'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                    d="M1 3h22v20H1z" />
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['categorias'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                    d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span
                  class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Especialidades</span>
              </div>
            </a>
          </li>
 --}}

         
{{-- 
          <li
            class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(2), ['logos'])) {{ 'bg-slate-900' }} @endif">
            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(2), ['logos'])) {{ 'hover:text-slate-200' }} @endif"
              href="{{ route('logos.index') }}">
              <div class="flex items-center">
                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['logos'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                    d="M1 3h22v20H1z" />
                  <path
                    class="fill-current @if (in_array(Request::segment(2), ['logos'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                    d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                </svg>
                <span
                  class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Logos
                  Cliente</span>
              </div>
            </a>
          </li> --}}

          

        </ul>
      </div>

    </div>

    <!-- Expand / collapse button -->
    <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
      <div class="px-3 py-2">
        <button @click="sidebarExpanded = !sidebarExpanded">
          <span class="sr-only">Expand / collapse sidebar</span>
          <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
            <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
            <path class="text-slate-600" d="M3 23H1V1h2z" />
          </svg>
        </button>
      </div>
    </div>

  </div>
</div>
