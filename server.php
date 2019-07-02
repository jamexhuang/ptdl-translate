<?php

return [
    'index' => [
        'title' => '查看伺服器 :name ',
        'header' => '伺服器控制檯',
        'header_sub' => '實時掌控您的伺服器。',
    ],
    'schedule' => [
        'header' => '計劃任務',
        'header_sub' => '一處輕鬆掌管伺服器任務。',
        'current' => '當前計劃',
        'new' => [
            'header' => '新建計劃',
            'header_sub' => '為此伺服器新建一組計劃任務。',
            'submit' => '創建任務',
        ],
        'manage' => [
            'header' => '管理任務',
            'submit' => '修改任務',
            'delete' => '刪除任務',
        ],
        'task' => [
            'time' => '在···之後',
            'action' => '執行操作',
            'payload' => '任務內容',
            'add_more' => '添加其他任務',
        ],
        'actions' => [
            'command' => '發送命令',
            'power' => '電源命令',
        ],
        'toggle' => '更改狀態',
        'run_now' => '觸發任務',
        'schedule_created' => '已成功在此伺服器上新建計劃任務。',
        'schedule_updated' => '已更新計劃任務。',
        'unnamed' => '未命名任務',
        'setup' => '任務設定',
        'day_of_week' => '星期',
        'day_of_month' => '日',
        'hour' => '時',
        'minute' => '分',
        'time_help' => '計劃任務系統支持使用 Cronjob 語法來定義任務啟動時間。使用上方的字段來指定計劃任務的開始時間或選擇多選菜單中的多個選項。',
        'task_help' => '任務時間與先前定義的任務緊密相關。每個計劃最多可分配 5 項任務且任務時間間隔不得超過 15 分鐘。',
    ],
    'tasks' => [
        'task_created' => '已成功在面板上新建任務。',
        'task_updated' => '已成功更新任務。現有的所有隊列中的任務操作將被取消並於下個定義時間執行。',
        'header' => '計劃任務',
        'header_sub' => '自動化您的伺服器。',
        'current' => '當前計劃任務',
        'actions' => [
            'command' => '發送命令',
            'power' => '發送電源指令',
        ],
        'new_task' => '新增任務',
        'toggle' => '更改狀態',
        'new' => [
            'header' => '新建任務',
            'header_sub' => '為此伺服器新建計劃任務。',
            'task_name' => '任務名稱',
            'day_of_week' => '星期',
            'custom' => '自定義',
            'day_of_month' => '日',
            'hour' => '時',
            'minute' => '分',
            'sun' => '星期日',
            'mon' => '星期一',
            'tues' => '星期二',
            'wed' => '星期三',
            'thurs' => '星期四',
            'fri' => '星期五',
            'sat' => '星期六',
            'submit' => '創建任務',
            'type' => '任務類型',
            'chain_then' => '先···再···',
            'chain_do' => '執行',
            'chain_arguments' => '使用參數',
            'payload' => '任務內容',
            'payload_help' => '例如，若您選擇<code>發送命令</code>，請在此處填寫要發送的命令。若您選擇<code>發送電源指令</code>，請在此處填寫電源命令（如<code>重啟</code>）.',
        ],
        'edit' => [
            'header' => '任務管理',
            'submit' => '更新任務',
        ],
    ],
    'users' => [
        'header' => '用戶管理',
        'header_sub' => '掌控誰能訪問您的伺服器。',
        'configure' => '設定權限',
        'list' => '權限用戶',
        'add' => '新增子用戶',
        'update' => '更新子用戶',
        'user_assigned' => '已成功分配新子用戶至此伺服器。',
        'user_updated' => '已成功更新權限。',
        'edit' => [
            'header' => '編輯子用戶',
            'header_sub' => '編輯此用戶的伺服器訪問權限。',
        ],
        'new' => [
            'header' => '新增新用戶',
            'header_sub' => '新增允許訪問此伺服器的用戶。',
            'email' => '電子郵件地址',
            'email_help' => '輸入您邀請管理此伺服器用戶的電子郵件地址。',
            'power_header' => '電源管理',
            'file_header' => '文件管理',
            'subuser_header' => '子用戶管理',
            'server_header' => '伺服器管理',
            'task_header' => '計劃任務管理',
            'database_header' => '資料庫管理',
            'power_start' => [
                'title' => '啟動伺服器',
                'description' => '允許此用戶啟動伺服器。',
            ],
            'power_stop' => [
                'title' => '停止伺服器',
                'description' => '允許此用戶停止伺服器。',
            ],
            'power_restart' => [
                'title' => '重新啟動伺服器',
                'description' => '允許此用戶重新啟動伺服器。',
            ],
            'power_kill' => [
                'title' => '強制關閉伺服器',
                'description' => '允許此用戶強行關閉伺服器。',
            ],
            'send_command' => [
                'title' => '發送控制檯命令',
                'description' => '允許用戶發送控制檯命令。若用戶沒有“停止伺服器”權限，則其 stop 命令。',
            ],
            'access_sftp' => [
                'title' => 'SFTP 權限',
                'description' => '允許用戶連接到守護程序所提供的 SFTP 伺服器。',
            ],
            'list_files' => [
                'title' => '列出文件',
                'description' => '允許用戶列出伺服器上所有文件及文件夾，但是無法查看文件內容。',
            ],
            'edit_files' => [
                'title' => '編輯文件',
                'description' => '允許用戶打開文件查看內容。SFTP 不受此權限影響。',
            ],
            'save_files' => [
                'title' => '保存文件',
                'description' => '允許用戶保存編輯過的文件內容。SFTP 不受此權限影響。',
            ],
            'move_files' => [
                'title' => '重命名與移動文件',
                'description' => '允許用戶在文件系統上重命名與移動文件及文件夾。',
            ],
            'copy_files' => [
                'title' => '複製文件',
                'description' => '允許用戶在文件系統上覆制文件及文件夾。',
            ],
            'compress_files' => [
                'title' => '壓縮文件',
                'description' => '允許用戶在文件系統上壓縮文件及文件夾。',
            ],
            'decompress_files' => [
                'title' => '解壓文件',
                'description' => '允許用戶解壓 .zip 和 .tar（.gz）歸檔文件。',
            ],
            'create_files' => [
                'title' => '創建文件',
                'description' => '允許用戶通過面板創建文件。',
            ],
            'upload_files' => [
                'title' => '上傳文件',
                'description' => '允許用戶通過文件管理上傳文件。',
            ],
            'delete_files' => [
                'title' => '刪除文件',
                'description' => '允許用戶刪除文件系統上的文件。',
            ],
            'download_files' => [
                'title' => '下載文件',
                'description' => '允許用戶下載文件。若用戶被給予此權限，其可以在下載後查看文件而無需所需面板權限。',
            ],
            'list_subusers' => [
                'title' => '列出子用戶',
                'description' => '允許用戶訪問此伺服器的子用戶列表。',
            ],
            'view_subuser' => [
                'title' => '查看子用戶',
                'description' => '允許用戶查看子用戶的權限。',
            ],
            'edit_subuser' => [
                'title' => '編輯子用戶',
                'description' => '允許用戶編輯此伺服器上的子用戶權限。',
            ],
            'create_subuser' => [
                'title' => '創建子用戶',
                'description' => '允許用戶在此伺服器上添加子用戶。',
            ],
            'delete_subuser' => [
                'title' => '刪除子用戶',
                'description' => '允許用戶刪除此伺服器上的子用戶。',
            ],
            'view_allocations' => [
                'title' => '查看分配',
                'description' => '允許用戶查看所有分配到此伺服器上的 IP 及端口。',
            ],
            'edit_allocation' => [
                'title' => '編輯默認連接',
                'description' => '允許用戶更改此伺服器的默認連接地址。',
            ],
            'view_startup' => [
                'title' => '查看啟動參數',
                'description' => '允許用戶訪問伺服器的啟動參數和相關變量。',
            ],
            'edit_startup' => [
                'title' => '編輯啟動參數',
                'description' => '允許用戶更改伺服器的啟動參數。',
            ],
            'list_schedules' => [
                'title' => '列出計劃任務',
                'description' => '允許用戶列出伺服器上的所有計劃任務（無論是否啟用）。',
            ],
            'view_schedule' => [
                'title' => '查看計劃',
                'description' => '允許用戶查看計劃任務的詳細信息，包含執行時間及分配任務。',
            ],
            'toggle_schedule' => [
                'title' => '開關計劃',
                'description' => '允許用戶啟用或禁用計劃的。',
            ],
            'queue_schedule' => [
                'title' => '隊列計劃',
                'description' => '允許用戶將計劃納入隊列在下個週期執行。',
            ],
            'edit_schedule' => [
                'title' => '編輯計劃',
                'description' => '允許用戶編輯計劃，包括所有的執行任務。這將允許用戶移除單個任務，但無法移除計劃本身。',
            ],
            'create_schedule' => [
                'title' => '創建計劃',
                'description' => '允許用戶新建計劃任務。',
            ],
            'delete_schedule' => [
                'title' => '刪除計劃',
                'description' => '允許用戶從伺服器刪除計劃。',
            ],
            'view_databases' => [
                'title' => '查看資料庫信息',
                'description' => '允許用戶查看所有與此伺服器相關聯的資料庫及其用戶名與密碼信息。',
            ],
            'reset_db_password' => [
                'title' => '重置資料庫',
                'description' => '允許用戶重置伺服器資料庫密碼。',
            ],
            'delete_database' => [
                'title' => '刪除資料庫',
                'description' => '允許用戶從面板刪除此伺服器資料庫。',
            ],
            'create_database' => [
                'title' => '新建資料庫',
                'description' => '允許用戶為此伺服器新建資料庫。',
            ],
        ],
    ],
    'allocations' => [
        'mass_actions' => '批量操作',
        'delete' => '刪除分配地址',
    ],
    'files' => [
        'exceptions' => [
            'invalid_mime' => '此類型文件無法通過面板內置編輯器編輯。',
            'max_size' => '此文件過大，無法使用面板內置編輯器編輯。',
        ],
        'header' => '文件管理',
        'header_sub' => '從網頁直接管理您的所有文件。',
        'loading' => '正在加載初始文件結構，這可能需要幾秒鐘。',
        'path' => '當您設定插件或伺服器設置的文件路徑時，您應使用 :path 作為您的根目錄。此節點通過網頁上傳的最大文件限制為 :size。',
        'seconds_ago' => '數秒前',
        'file_name' => '文件名',
        'size' => '大小',
        'last_modified' => '最後修改',
        'add_new' => '新建文件',
        'add_folder' => '新建文件夾',
        'mass_actions' => '批量操作',
        'delete' => '刪除文件',
        'edit' => [
            'header' => '編輯文件',
            'header_sub' => '從網頁編輯文件。',
            'save' => '保存文件',
            'return' => '返回文件管理',
        ],
        'add' => [
            'header' => '新建文件',
            'header_sub' => '在您伺服器上新建新文件。',
            'name' => '文件名',
            'create' => '創建文件',
        ],
    ],
    'config' => [
        'name' => [
            'header' => '伺服器名',
            'header_sub' => '更改伺服器名稱。',
            'details' => '此伺服器名只是為了讓您更好的管理伺服器，並不會對向遊戲內玩家顯示的伺服器設定造成影響。',
        ],
        'startup' => [
            'header' => '啟動設定',
            'header_sub' => '控制伺服器的啟動參數。',
            'command' => '啟動命令',
            'edit_params' => '編輯參數',
            'update' => '更新啟動參數',
            'startup_regex' => '輸入規則',
            'edited' => '已成功編輯啟動變量。這將在下次伺服器啟動時發揮功用。',
        ],
        'sftp' => [
            'header' => 'SFTP 設定',
            'header_sub' => 'SFTP 連接所需的帳戶信息。',
            'details' => 'SFTP 信息',
            'conn_addr' => '連接地址',
            'warning' => 'SFTP 密碼為您的帳戶密碼。請確保您的客戶端被設置為使用 SFTP 而非 FTP 或 FTPS，這些協議間存在差異。',
        ],
        'database' => [
            'header' => '資料庫',
            'header_sub' => '此伺服器的所有可用資料庫。',
            'your_dbs' => '已設定的資料庫',
            'host' => 'MySQL 主機',
            'reset_password' => '重置密碼',
            'no_dbs' => '此伺服器沒有可用的資料庫。',
            'add_db' => '新建新資料庫。',
        ],
        'allocation' => [
            'header' => '伺服器地址分配',
            'header_sub' => '控制此伺服器可使用的 IP 地址和端口。',
            'available' => '可用分配地址',
            'help' => '分配地址幫助',
            'help_text' => '左方列表列出了您可用於傳入連接的所有可用 IP 地址及端口。',
        ],
    ],
];
