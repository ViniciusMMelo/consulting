<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Search Bar -->
<div class="px-4 py-3">
  <label class="flex h-12 w-full min-w-40 flex-col">
    <div class="flex h-full w-full flex-1 items-stretch rounded-lg shadow-sm">
      <div class="flex items-center justify-center rounded-l-lg border border-r-0 border-slate-300 bg-white pl-4 text-slate-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400">
        <span class="material-symbols-outlined text-2xl">search</span>
      </div>
      <input class="form-input flex min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg border border-l-0 border-slate-300 bg-white px-4 text-base font-normal leading-normal text-slate-900 placeholder:text-slate-500 focus:outline-0 focus:ring-2 focus:ring-primary/50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:placeholder:text-slate-400 dark:focus:ring-primary/60" placeholder="Search by client or consultant name" value="" />
    </div>
  </label>
</div>
<!-- Filter Chips -->
<div class="flex gap-3 overflow-x-auto px-4 pb-3">
  <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary pl-4 pr-4 text-sm font-medium text-white shadow-sm">
    Upcoming
  </button>
  <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-200 pl-4 pr-4 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-200">
    Past
  </button>
  <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-200 pl-4 pr-4 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-200">
    Canceled
  </button>
  <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-200 pl-4 pr-2 text-sm font-medium text-slate-700 dark:bg-slate-700 dark:text-slate-200">
    <span>Sort by Date</span>
    <span class="material-symbols-outlined text-xl">arrow_drop_down</span>
  </button>
</div>
<!-- Consultation List -->
<div class="flex flex-col gap-4 px-4">
  <!-- List Item 1 -->
  <div class="flex flex-col gap-4 rounded-xl bg-white p-4 shadow-sm dark:bg-slate-800">
    <div class="flex items-center gap-4">
      <img class="h-14 w-14 rounded-full object-cover" data-alt="Portrait of a female consultant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAss2aOZS-hB8a-k0d4E1WyvUHgnaoY1G_-G9aJFAXK5Ui2khSGV1YDRSwgoCm0UYYolhJv9P93dVNtAb6AD7b8dj8Ttc57FeLG9k0Z3FsNxHXNiaMkNNwr8YUWz5Zt0rm1KbfJgkwc1S2jbFZSYCJGbW9r_2ZW8mluH6p9QQ06ESmyEgGVYPTvrxqED7DRSyWPNrzqVJ63E8vpAGOkt5KXgipP0H5bjShh1Pkdj9Can60XZXZ2Mr2togheSv1qqZVcTgUPjeP0FTcP" />
      <div class="flex-1">
        <p class="text-base font-bold text-slate-900 dark:text-white">Eleanor Vance</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Assigned to: Jane Smith</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Oct 26, 2024 - 10:30 AM</p>
      </div>
      <div class="self-start rounded-full bg-primary/20 px-3 py-1 text-xs font-medium text-primary dark:bg-primary/30 dark:text-sky-300">
        Upcoming
      </div>
    </div>
    <div class="border-t border-slate-200 pt-3 dark:border-slate-700">
      <p class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-200">Retirement Planning</p>
      <div class="flex items-center justify-end gap-2">
        <button class="flex h-9 items-center justify-center rounded-lg border border-slate-300 bg-transparent px-3 text-sm font-medium text-slate-700 dark:border-slate-600 dark:text-slate-200">View</button>
        <button class="flex h-9 items-center justify-center rounded-lg border border-slate-300 bg-transparent px-3 text-sm font-medium text-slate-700 dark:border-slate-600 dark:text-slate-200">Reschedule</button>
        <button class="flex h-9 items-center justify-center rounded-lg bg-red-100 px-3 text-sm font-medium text-red-600 dark:bg-red-900/40 dark:text-red-400">Cancel</button>
      </div>
    </div>
  </div>
  <!-- List Item 2 -->
  <div class="flex flex-col gap-4 rounded-xl bg-white p-4 shadow-sm dark:bg-slate-800">
    <div class="flex items-center gap-4">
      <img class="h-14 w-14 rounded-full object-cover" data-alt="Portrait of a male client" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCC2jlHdcN_S66ltHfPMc9pl5pOG623zYPptzfG2DoCcyqgVSFgVfdPzIfAl9bAPROpS93NCgbtxp5QF2KCBp-1qGoilwjvtAkIMB7OcGiTfI8sROKfBBb-eVHLZfWeWkhUTNNP_KGOfzLQ--hh-Sq01WDwD4Te8Y9tgmsb6IQgjEG-JHegzCpMKeScJ22b1x80GqxrR90kumzLOQJMaGu0s5e9L3qgL3PefJzENyQ4u0jkTbZ60XhVflkCmzRo4jDzWPW8O9Ic0Ity" />
      <div class="flex-1">
        <p class="text-base font-bold text-slate-900 dark:text-white">Marcus Holloway</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Assigned to: Robert Brown</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Oct 27, 2024 - 02:00 PM</p>
      </div>
      <div class="self-start rounded-full bg-primary/20 px-3 py-1 text-xs font-medium text-primary dark:bg-primary/30 dark:text-sky-300">
        Upcoming
      </div>
    </div>
    <div class="border-t border-slate-200 pt-3 dark:border-slate-700">
      <p class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-200">Investment Strategy</p>
      <div class="flex items-center justify-end gap-2">
        <button class="flex h-9 items-center justify-center rounded-lg border border-slate-300 bg-transparent px-3 text-sm font-medium text-slate-700 dark:border-slate-600 dark:text-slate-200">View</button>
        <button class="flex h-9 items-center justify-center rounded-lg border border-slate-300 bg-transparent px-3 text-sm font-medium text-slate-700 dark:border-slate-600 dark:text-slate-200">Reschedule</button>
        <button class="flex h-9 items-center justify-center rounded-lg bg-red-100 px-3 text-sm font-medium text-red-600 dark:bg-red-900/40 dark:text-red-400">Cancel</button>
      </div>
    </div>
  </div>
  <!-- List Item 3 -->
  <div class="flex flex-col gap-4 rounded-xl bg-white p-4 shadow-sm dark:bg-slate-800">
    <div class="flex items-center gap-4">
      <img class="h-14 w-14 rounded-full object-cover" data-alt="Portrait of a female client" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjecKNQ8CMOEJ1iCQUmEmRE4epLqDbNZVKQgHqyHi4rvDIqzyb3sXM_q5el_5_VRTu7BALSKXPPd92koB_-cXxf2n5aO_Bs2DJ4MLDZ7k8UvldAJwu8cbiVvaZvUvSwnwVStEHDeEz63j46hEoAxDucuri7Gqklg_qIzVxcyh6DYzQdBTohlX6OPX6njZRs-6GTupJ4ftMaE8CFaR0l4TIsgA_WXEE3zfF0qXNAkQWqMa4BJ3L-m-OHi7n6125xYsoXiqLG5lDK8_S" />
      <div class="flex-1">
        <p class="text-base font-bold text-slate-900 dark:text-white">Chloe Decker</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Assigned to: Jane Smith</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Oct 20, 2024 - 09:00 AM</p>
      </div>
      <div class="self-start rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-400">
        Completed
      </div>
    </div>
    <div class="border-t border-slate-200 pt-3 dark:border-slate-700">
      <p class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-200">Estate Planning</p>
      <div class="flex items-center justify-end gap-2">
        <button class="flex h-9 items-center justify-center rounded-lg border border-slate-300 bg-transparent px-3 text-sm font-medium text-slate-700 dark:border-slate-600 dark:text-slate-200">View Details</button>
      </div>
    </div>
  </div>
  <!-- List Item 4 - Canceled -->
  <div class="flex flex-col gap-4 rounded-xl bg-white p-4 shadow-sm dark:bg-slate-800">
    <div class="flex items-center gap-4 opacity-70">
      <img class="h-14 w-14 rounded-full object-cover" data-alt="Portrait of a male client" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1Z3haYqZCrgMS9gtXqTRjZuyCEDYZgC-C_f6_UMfymt61eZWFpWXgEBMACQK9MYIukbuSe7LXdVTbAhUOog7VaiICgiIYIqw1l-Vg_a-0N6ipUp_B3rDK4XRUn8qrlu0L6xtk8V4h9yxLBARWYwP6cCmvHQWxk91FKgXgPGzNUg_6moa2oSJ0UZ34hjEFFFgfOYGqHatCp8BslRHEQu3i5RzpuQkliSUR7jBPVjxczHxFFs6yXQKKRV0t3cnNQw-NNf2l4Z6HFAb9" />
      <div class="flex-1">
        <p class="text-base font-bold text-slate-900 dark:text-white">Liam Gallagher</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Assigned to: Robert Brown</p>
        <p class="text-sm font-normal text-slate-600 dark:text-slate-400">Oct 15, 2024 - 11:00 AM</p>
      </div>
      <div class="self-start rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700 dark:bg-red-900/50 dark:text-red-400">
        Canceled
      </div>
    </div>
    <div class="border-t border-slate-200 pt-3 opacity-70 dark:border-slate-700">
      <p class="mb-2 text-sm font-semibold text-slate-800 dark:text-slate-200">Tax Advisory</p>
      <div class="flex items-center justify-end gap-2">
        <button class="flex h-9 items-center justify-center rounded-lg border border-slate-300 bg-transparent px-3 text-sm font-medium text-slate-700 dark:border-slate-600 dark:text-slate-200">View Details</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>