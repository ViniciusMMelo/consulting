<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="p-4">
    <!-- Search Bar -->
    <div class="w-full">
        <label class="flex flex-col min-w-40 h-12">
            <div class="flex w-full flex-1 items-stretch rounded-lg h-full bg-zinc-200 dark:bg-zinc-800">
                <div class="text-zinc-500 dark:text-zinc-400 flex items-center justify-center pl-4">
                    <span class="material-symbols-outlined text-2xl">search</span>
                </div>
                <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg text-zinc-800 dark:text-white focus:outline-0 focus:ring-0 border-none bg-transparent h-full placeholder:text-zinc-500 dark:placeholder:text-zinc-400 px-2 text-base font-normal leading-normal" placeholder="Search by name or email..." value="" />
            </div>
        </label>
    </div>
</div>
<!-- User List -->
<div class="flex flex-col gap-2 px-4 pb-4">
    <!-- List Item 1 -->
    <div class="flex items-center gap-4 rounded-lg bg-white dark:bg-zinc-900/50 p-3 justify-between shadow-sm">
        <div class="flex items-center gap-4">
            <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12" data-alt="Avatar for Sarah Johnson" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqskKNZILUhRsFc2amkdbYmCKSGIuSZi47tsrzKQoX5PMxT7xKpAIeB7M9fIYkDDvnik-MX9tfOxlWzG6WkWTJ9ncB5At6giu485jznz9tnZ70kQ0HbEEIt_2UitB6Is17avFWRdGXBjyDfx13Mw5fV7V674v02ijPYqD5SDxRhABjJDlhi9HCyocZCX3Nec-Q93_-FIc2Py-a_xlVkjmIQOCEVeSd2Y_fMVyXs_6m4qNEXYgXBkVeH7MOY266ZHD9w6May0wwKym0" />
            <div class="flex flex-col justify-center">
                <p class="text-zinc-900 dark:text-white text-base font-medium leading-normal line-clamp-1">Sarah Johnson</p>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm font-normal leading-normal line-clamp-2">sarah.j@consultfirm.com - Admin</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2">
            <button aria-label="Edit user" class="text-primary flex size-9 items-center justify-center rounded-full hover:bg-primary/10 transition-colors">
                <span class="material-symbols-outlined text-xl">edit</span>
            </button>
            <button aria-label="Delete user" class="text-red-500 flex size-9 items-center justify-center rounded-full hover:bg-red-500/10 transition-colors">
                <span class="material-symbols-outlined text-xl">delete</span>
            </button>
        </div>
    </div>
    <!-- List Item 2 -->
    <div class="flex items-center gap-4 rounded-lg bg-white dark:bg-zinc-900/50 p-3 justify-between shadow-sm">
        <div class="flex items-center gap-4">
            <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12" data-alt="Avatar for Michael Chen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6HRAHLx7c2UbEo32D5Txqe-p67gcsTawU__w03dBX4vStMux52x2DFrx1va2AZ2pku2qTKVLHZjvRSDtkbq2lk2IXnvRn-7M5zP2u2WQHJN-3kwzHXrnrTBXplJgIZi_bT4BXHcBTj69_LfKs1IubREEwbT-08FG4IB09wazjeYFFEfbxle2d8AVvkVlczQaymUnD837TfAXGz4ndBPeyQTkdyEACgRW_QC5jdJj3d51qlurUm-h3unus1_-RB7bCfxOLCxm70gIA" />
            <div class="flex flex-col justify-center">
                <p class="text-zinc-900 dark:text-white text-base font-medium leading-normal line-clamp-1">Michael Chen</p>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm font-normal leading-normal line-clamp-2">m.chen@consultfirm.com - Consultant</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2">
            <button aria-label="Edit user" class="text-primary flex size-9 items-center justify-center rounded-full hover:bg-primary/10 transition-colors">
                <span class="material-symbols-outlined text-xl">edit</span>
            </button>
            <button aria-label="Delete user" class="text-red-500 flex size-9 items-center justify-center rounded-full hover:bg-red-500/10 transition-colors">
                <span class="material-symbols-outlined text-xl">delete</span>
            </button>
        </div>
    </div>
    <!-- List Item 3 -->
    <div class="flex items-center gap-4 rounded-lg bg-white dark:bg-zinc-900/50 p-3 justify-between shadow-sm">
        <div class="flex items-center gap-4">
            <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12" data-alt="Avatar for Emily Rodriguez" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLpYj61lvxzYpazR9NMVbGEz7LxU_jiSPD-WK7d3CT9zLkxuzacl8V5pUWnliZnzCuKIdfSknbZNG1UWdHqgmPr5frxvVrbUGRrXRWKbcFuKj7cN-_dEhPQhY78MycdzyaT0jrmH_8cGn2WcCOFrkqsVRXSQ3C0QKSvDwTvXEBfK7iGHidicRexOq-ApSmF919itQcMDX8qSoGFxAzUBZrUoMRP3LRjfjXvteab62F-uHgokhuUjAk5e8F3ufy9TAA45zlvz5LsOsi" />
            <div class="flex flex-col justify-center">
                <p class="text-zinc-900 dark:text-white text-base font-medium leading-normal line-clamp-1">Emily Rodriguez</p>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm font-normal leading-normal line-clamp-2">emily.r@clientcorp.com - Client</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2">
            <button aria-label="Edit user" class="text-primary flex size-9 items-center justify-center rounded-full hover:bg-primary/10 transition-colors">
                <span class="material-symbols-outlined text-xl">edit</span>
            </button>
            <button aria-label="Delete user" class="text-red-500 flex size-9 items-center justify-center rounded-full hover:bg-red-500/10 transition-colors">
                <span class="material-symbols-outlined text-xl">delete</span>
            </button>
        </div>
    </div>
    <!-- List Item 4 -->
    <div class="flex items-center gap-4 rounded-lg bg-white dark:bg-zinc-900/50 p-3 justify-between shadow-sm">
        <div class="flex items-center gap-4">
            <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12" data-alt="Avatar for David Lee" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKAXUpxG1EH3IiEhc50M5wTshQkPsau2NQplhchXKAtptOolRAvnMrA2kBodaD7dUtA50xouBxb7thZeg5h7PH9-G8sjH5WoZJzWNkXtbrOivi2JmlH1SqPWCw1oIeUON5on7a_kwPtS0h2wxetJOFzS3dnlEBEUw6XyGWwVXRrSvp1OCMtqAZesEDdokxmuqpEVzWOtDDFu5O-aRAJS35zNNZStINEQClZ2ngVdLrGucP1yPiMryJUHpI1gnwF8Bpn7AKW0OFHGIc" />
            <div class="flex flex-col justify-center">
                <p class="text-zinc-900 dark:text-white text-base font-medium leading-normal line-clamp-1">David Lee</p>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm font-normal leading-normal line-clamp-2">d.lee@consultfirm.com - Consultant</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2">
            <button aria-label="Edit user" class="text-primary flex size-9 items-center justify-center rounded-full hover:bg-primary/10 transition-colors">
                <span class="material-symbols-outlined text-xl">edit</span>
            </button>
            <button aria-label="Delete user" class="text-red-500 flex size-9 items-center justify-center rounded-full hover:bg-red-500/10 transition-colors">
                <span class="material-symbols-outlined text-xl">delete</span>
            </button>
        </div>
    </div>
    <!-- List Item 5 -->
    <div class="flex items-center gap-4 rounded-lg bg-white dark:bg-zinc-900/50 p-3 justify-between shadow-sm">
        <div class="flex items-center gap-4">
            <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12" data-alt="Avatar for Jessica Williams" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk9ykdL0soMd-ojQzBrXO8fcKiydrf5db4TjhckBYwwN1EGaFFjY08_2sC_moMzY8VqwB7Qy3FEv42Tlbb_2SqRVgVspqfHflPm_FKqDlc8poWbVdKkXwx9lFY8_ZIz3gd6Qa-5hka4HTEEqCgIxAGJBmpUBNFiFnQLIs5nQss0_2Fay7-ug5W1fsK_jBc6MWFwDeWTQZ7a89xQr0w5s6kBJVHBGa1rjKwbpu49HimUSGArYFTQR-KbE8sOrqy29Ybo5kSGgOVrN_U" />
            <div class="flex flex-col justify-center">
                <p class="text-zinc-900 dark:text-white text-base font-medium leading-normal line-clamp-1">Jessica Williams</p>
                <p class="text-zinc-500 dark:text-zinc-400 text-sm font-normal leading-normal line-clamp-2">jessica.w@clientcorp.com - Client</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2">
            <button aria-label="Edit user" class="text-primary flex size-9 items-center justify-center rounded-full hover:bg-primary/10 transition-colors">
                <span class="material-symbols-outlined text-xl">edit</span>
            </button>
            <button aria-label="Delete user" class="text-red-500 flex size-9 items-center justify-center rounded-full hover:bg-red-500/10 transition-colors">
                <span class="material-symbols-outlined text-xl">delete</span>
            </button>
        </div>
    </div>
</div>
<?= $this->endSection() ?>