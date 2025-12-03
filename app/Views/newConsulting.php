<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="relative flex min-h-screen w-full flex-col font-display text-base text-gray-800 dark:text-gray-300">
  <div class="sticky top-0 z-10 flex h-16 items-center border-b border-gray-200/80 bg-background-light/80 px-4 backdrop-blur-sm dark:border-gray-800/80 dark:bg-background-dark/80">
    <button onclick="window.history.back()" class="flex size-10 shrink-0 items-center justify-center rounded-full text-gray-600 hover:bg-gray-200 dark:text-gray-400 dark:hover:bg-gray-800">
      <span class="material-symbols-outlined text-2xl">arrow_back</span>
    </button>
    <h1 class="flex-1 text-center text-lg font-bold text-gray-900 dark:text-white">Schedule Consultation</h1>
    <div class="w-10"></div>
  </div>
  <main class="flex-1 space-y-6 p-4 pb-28">
    <div class="flex max-w-full flex-wrap items-end gap-4">
      <label class="flex w-full flex-col">
        <p class="pb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Choose a Service</p>
        <select class="form-input flex h-14 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-gray-300 bg-background-light p-4 text-base font-normal leading-normal text-gray-900 placeholder:text-gray-400 focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-primary">
          <option value="retirement">Retirement Planning</option>
          <option value="investment">Investment Strategy</option>
          <option value="tax">Tax Advisory</option>
        </select>
      </label>
    </div>
    <div>
      <h3 class="text-lg font-bold leading-tight tracking-tight text-gray-900 dark:text-white">Select a Date &amp; Time</h3>
      <div class="mt-3 rounded-xl bg-gray-100 p-4 dark:bg-gray-800">
        <div class="mb-3 flex items-center justify-between">
          <button class="flex size-8 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
            <span class="material-symbols-outlined text-xl">chevron_left</span>
          </button>
          <p class="text-sm font-semibold text-gray-900 dark:text-white">October 2024</p>
          <button class="flex size-8 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
            <span class="material-symbols-outlined text-xl">chevron_right</span>
          </button>
        </div>
        <div class="grid grid-cols-7 gap-1 text-center text-sm">
          <div class="p-2 text-gray-500">Su</div>
          <div class="p-2 text-gray-500">Mo</div>
          <div class="p-2 text-gray-500">Tu</div>
          <div class="p-2 text-gray-500">We</div>
          <div class="p-2 text-gray-500">Th</div>
          <div class="p-2 text-gray-500">Fr</div>
          <div class="p-2 text-gray-500">Sa</div>
          <div class="p-2 text-gray-400 dark:text-gray-600">29</div>
          <div class="p-2 text-gray-400 dark:text-gray-600">30</div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">1</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">2</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">3</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">4</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">5</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">6</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">7</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full bg-primary text-white">8</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">9</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full text-gray-400 dark:text-gray-600" disabled="">10</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">11</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">12</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">13</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">14</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">15</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">16</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">17</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">18</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">19</button></div>
          <div class="flex items-center justify-center"><button class="size-8 rounded-full">20</button></div>
        </div>
      </div>
      <div class="mt-4 grid grid-cols-3 gap-3">
        <button class="rounded-lg border border-gray-300 py-3 text-center text-sm font-medium hover:border-primary dark:border-gray-700 dark:hover:border-primary">9:00 AM</button>
        <button class="rounded-lg border border-gray-300 py-3 text-center text-sm font-medium hover:border-primary dark:border-gray-700 dark:hover:border-primary">9:30 AM</button>
        <button class="rounded-lg border border-primary bg-primary py-3 text-center text-sm font-medium text-white">10:00 AM</button>
        <button class="rounded-lg border border-gray-300 py-3 text-center text-sm font-medium hover:border-primary dark:border-gray-700 dark:hover:border-primary">11:30 AM</button>
        <button class="rounded-lg border border-gray-300 py-3 text-center text-sm font-medium hover:border-primary dark:border-gray-700 dark:hover:border-primary">1:00 PM</button>
        <button class="rounded-lg border border-gray-300 py-3 text-center text-sm font-medium text-gray-400 dark:border-gray-700 dark:text-gray-600" disabled="">2:30 PM</button>
      </div>
    </div>
    <div class="flex max-w-full flex-wrap items-end gap-4">
      <label class="flex w-full flex-col">
        <p class="pb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Anything specific you'd like to discuss? (Optional)</p>
        <textarea class="form-textarea flex min-h-28 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-gray-300 bg-background-light p-4 text-base font-normal leading-normal text-gray-900 placeholder:text-gray-400 focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/50 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-primary" placeholder="Type your notes here..."></textarea>
      </label>
    </div>
  </main>
  <footer class="fixed bottom-0 left-0 right-0 z-10 border-t border-gray-200 bg-background-light/80 p-4 backdrop-blur-sm dark:border-gray-800/80 dark:bg-background-dark/80">
    <button class="flex h-14 w-full items-center justify-center rounded-xl bg-primary text-base font-bold text-white transition-colors hover:bg-primary/90">
      Schedule
    </button>
  </footer>
</div>
<?= $this->endSection() ?>