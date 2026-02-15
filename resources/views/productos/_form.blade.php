<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $producto->nombre ?? '') }}"
           class="form-control" @error('nombre') style="border-color: #dc3545;" @enderror>
    @error('nombre')
        <p class="mt-1 mb-0" style="color: #dc3545; font-size: 0.875em;">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad" value="{{ old('cantidad', $producto->cantidad ?? '') }}"
           class="form-control"  @error('cantidad') style="border-color: #dc3545;" @enderror>
    @error('cantidad')
        <p class="mt-1 mb-0" style="color: #dc3545; font-size: 0.875em;">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" name="precio" id="precio" value="{{ old('precio', $producto->precio ?? '') }}"
           class="form-control" step="0.01" @error('precio') style="border-color: #dc3545;" @enderror>
    @error('precio')
        <p class="mt-1 mb-0" style="color: #dc3545; font-size: 0.875em;">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="calidad" class="form-label">Calidad</label>
    <select name="calidad" id="calidad" class="form-select" @error('calidad') style="border-color: #dc3545;" @enderror>
        <option value="">-- Selecciona --</option>
        @foreach(['Baja', 'Media', 'Alta', 'Premium'] as $opcion)
            <option value="{{ $opcion }}" {{ old('calidad', $producto->calidad ?? '') === $opcion ? 'selected' : '' }}>
                {{ $opcion }}
            </option>
        @endforeach
    </select>
    @error('calidad')
        <p class="mt-1 mb-0" style="color: #dc3545; font-size: 0.875em;">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <textarea name="descripcion" id="descripcion" rows="4"
              class="form-control" @error('descripcion') style="border-color: #dc3545;" @enderror>{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
    @error('descripcion')
        <p class="mt-1 mb-0" style="color: #dc3545; font-size: 0.875em;">{{ $message }}</p>
    @enderror
</div>
