<div>
  @php
  $changes = json_decode($getState(), true);
  @endphp

  @if ($changes && is_array($changes))
  <ul class="list-disc pl-4">
    @foreach ($changes as $key => $value)
    <li>
      <strong>{{ ucfirst($key) }}:</strong>
      {{ is_array($value) ? json_encode($value, JSON_PRETTY_PRINT) : $value }}
    </li>
    @endforeach
  </ul>
  @else
  <span class="text-gray-500">No Changes</span>
  @endif
</div>
