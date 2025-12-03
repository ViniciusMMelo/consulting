<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Segmented Buttons -->
<div class="px-4 py-4">
  <div class="flex h-11 flex-1 items-center justify-center rounded-lg bg-slate-200 p-1 dark:bg-slate-800">
    <label class="flex h-full flex-1 cursor-pointer items-center justify-center rounded-[0.4rem] px-2 text-sm font-medium leading-normal text-slate-600 has-[:checked]:bg-white has-[:checked]:text-slate-900 has-[:checked]:shadow-sm dark:text-slate-400 dark:has-[:checked]:bg-slate-700 dark:has-[:checked]:text-white">
      <span class="truncate">Upcoming</span>
      <input checked="" class="sr-only" name="consultation-type" type="radio" value="Upcoming" />
    </label>
    <label class="flex h-full flex-1 cursor-pointer items-center justify-center rounded-[0.4rem] px-2 text-sm font-medium leading-normal text-slate-600 has-[:checked]:bg-white has-[:checked]:text-slate-900 has-[:checked]:shadow-sm dark:text-slate-400 dark:has-[:checked]:bg-slate-700 dark:has-[:checked]:text-white">
      <span class="truncate">Past</span>
      <input class="sr-only" name="consultation-type" type="radio" value="Past" />
    </label>
  </div>
</div>
<!-- Consultations List -->
<div class="flex flex-col gap-4 px-4">
  <!-- Consultation Card 1 -->
  <div class="flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
    <div class="border-b border-slate-200 bg-slate-50 px-4 py-2 dark:border-slate-800 dark:bg-slate-900/50">
      <p class="text-xs font-bold uppercase tracking-wider text-primary dark:text-primary/90">TUE, OCT 26</p>
    </div>
    <div class="flex flex-col gap-4 p-4">
      <div class="flex items-start gap-4">
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800">
          <span class="material-symbols-outlined text-2xl text-slate-500 dark:text-slate-400">person</span>
        </div>
        <div class="flex flex-1 flex-col">
          <p class="text-base font-bold text-slate-900 dark:text-white">John Doe, Senior Wealth Advisor</p>
          <p class="text-sm text-slate-500 dark:text-slate-400">Retirement Planning Review</p>
          <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">10:30 AM - 11:15 AM</p>
        </div>
      </div>
      <div class="flex flex-1 items-center justify-end gap-3">
        <button class="flex h-10 min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-slate-200 px-4 text-sm font-bold leading-normal tracking-wide text-slate-700 dark:bg-slate-800 dark:text-slate-300">
          <span class="truncate">Cancel</span>
        </button>
        <button class="flex h-10 min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary px-4 text-sm font-bold leading-normal tracking-wide text-white">
          <span class="truncate">View Details</span>
        </button>
      </div>
    </div>
  </div>
  <!-- Consultation Card 2 -->
  <div class="flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
    <div class="border-b border-slate-200 bg-slate-50 px-4 py-2 dark:border-slate-800 dark:bg-slate-900/50">
      <p class="text-xs font-bold uppercase tracking-wider text-primary dark:text-primary/90">FRI, NOV 05</p>
    </div>
    <div class="flex flex-col gap-4 p-4">
      <div class="flex items-start gap-4">
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800">
          <span class="material-symbols-outlined text-2xl text-slate-500 dark:text-slate-400">person</span>
        </div>
        <div class="flex flex-1 flex-col">
          <p class="text-base font-bold text-slate-900 dark:text-white">Jane Smith, Investment Specialist</p>
          <p class="text-sm text-slate-500 dark:text-slate-400">Portfolio Diversification</p>
          <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">02:00 PM - 02:45 PM</p>
        </div>
      </div>
      <div class="flex flex-1 items-center justify-end gap-3">
        <button class="flex h-10 min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-slate-200 px-4 text-sm font-bold leading-normal tracking-wide text-slate-700 dark:bg-slate-800 dark:text-slate-300">
          <span class="truncate">Cancel</span>
        </button>
        <button class="flex h-10 min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary px-4 text-sm font-bold leading-normal tracking-wide text-white">
          <span class="truncate">View Details</span>
        </button>
      </div>
    </div>
  </div>
  <!-- Empty State View -->
  <div class="mt-8 flex flex-col items-center gap-4 rounded-lg px-4 py-12 text-center">
    <div class="flex size-16 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800">
      <span class="material-symbols-outlined text-3xl text-slate-500 dark:text-slate-400">event_upcoming</span>
    </div>
    <div class="flex flex-col gap-1">
      <p class="text-base font-semibold text-slate-900 dark:text-white">No upcoming consultations</p>
      <p class="text-sm text-slate-500 dark:text-slate-400">Ready to plan your financial future? Schedule a new session today.</p>
    </div>
  </div>
</div>
<?= $this->endSection() ?>