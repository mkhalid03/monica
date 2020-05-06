<?php

return [
    'sidebar_settings' => 'إعدادات الحساب',
    'sidebar_personalization' => 'التخصيص',
    'sidebar_settings_storage' => 'Storage',
    'sidebar_settings_export' => 'تصدير البيانات',
    'sidebar_settings_users' => 'المستخدمين',
    'sidebar_settings_subscriptions' => 'الإشتراك',
    'sidebar_settings_import' => 'استيراد البيانات',
    'sidebar_settings_tags' => 'إدارة العلامات',
    'sidebar_settings_api' => 'API (واجهة برمجة التطبيق)',
    'sidebar_settings_dav' => 'DAV Resources',
    'sidebar_settings_security' => 'الأمن',
    'sidebar_settings_auditlogs' => 'Audit logs',

    'title_general' => 'General Information',
    'title_i18n' => 'International settings',
    'title_layout' => 'Layout',

    'me_title' => 'My contact',
    'me_help' => 'This is the contact that represents <em>you</em> in Monica',
    'me_select' => 'Select a contact',
    'me_no_contact' => 'No contact selected yet.',
    'me_select_click' => 'Click here to select a contact.',
    'me_remove_contact' => 'Remove the association',
    'me_choose' => 'Choose yourself',
    'me_choose_placeholder' => 'Choose yourself',

    'export_title' => 'قم بتصدير بيانات حسابك',
    'export_be_patient' => 'انقر فوق الزر لبدء التصدير. قد يستغرق الأمر عدة دقائق لعملية التصدير – يرجى التحلي بالصبر، و لا تضغط كثيراً على الزر.',
    'export_title_sql' => 'التصدير إلى SQL',
    'export_sql_explanation' => 'تصدير بياناتك في صيغة SQL يسمح لك بأخذ بياناتك و إستيرادها لنموذج Monica الخاص بك. هذا الأمر قيم فقط إذا كان لديك خادم خاص بك.',
    'export_sql_cta' => 'التصدير إلى SQL',
    'export_sql_link_instructions' => 'ملاحظة: <a href=":url">اقرأ التعليمات</a> لمعرفة المزيد عن إستيراد هذا الملف لنموذجك.',

    'firstname' => 'الاسم الأول',
    'lastname' => 'الاسم الأخير',
    'name_order' => 'ترتيب الاسم',
    'name_order_firstname_lastname' => '<First name><Last name> - فلان الفلاني',
    'name_order_lastname_firstname' => '<Last name><First name> فلاني فلان',
    'name_order_firstname_lastname_nickname' => '<First name><Last name> (<Nickname>) - فلان الفلاني (فلان)',
    'name_order_firstname_nickname_lastname' => '<First name> (<Nickname>) <Last name> - فلان (فلان) الفلاني',
    'name_order_lastname_firstname_nickname' => '<Last name><First name> (<Nickname>) - فلاني فلان (فلان)',
    'name_order_lastname_nickname_firstname' => '<Last name> (<Nickname>) <First name> فلاني (فلان) فلان',
    'name_order_nickname_firstname_lastname' => '<Nickname> (<First name> <Last name>) - Rambo (John Doe)',
    'name_order_nickname_firstname_lastname' => '<Nickname> (<Last name> <First name>) - Rambo (Doe John)',
    'name_order_nickname' => '<Nickname> - فلان',
    'currency' => 'العملة',
    'name' => 'اسمك: :اسم',
    'email' => 'البريد الإلكتروني',
    'email_placeholder' => 'أدخل البريد الإلكتروني',
    'email_help' => 'هذا البريد الإلكتروني الذي يتم استخدامه لتسجيل الدخول، و حيث سوف تتلقى رسائل التذكير الخاص بك.',
    'timezone' => 'المنطقة الزمنية',
    'temperature_scale' => 'Temperature scale',
    'temperature_scale_fahrenheit' => 'Fahrenheit',
    'temperature_scale_celsius' => 'Celsius',
    'layout' => 'التصميم',
    'layout_small' => 'الحد الأقصى 1200 بكسل',
    'layout_big' => 'العرض الكامل للمستعرض',
    'save' => 'تحديث التفضيلات',
    'delete_title' => 'احذف حسابك',
    'delete_desc' => 'Do you wish to delete your account? Warning: deletion is permanent and all your data will be erased permanently. Your subscription (if you have any) will also be immediately cancelled.',
    'delete_other_desc' => 'Just to be clear: your data in the main database will be deleted immediately. However, as described in our privacy policy, we do daily backups of the database in case of failure and this backup is kept for 30 days – then it’s completely deleted. It’s unrealistic to imagine that we can go in all the backups to delete your specific data. By the way, this data is encrypted on very secure Amazon servers and no one has the encryption key except us. Therefore, your data will completely disappear in 30 days from all the backups, and no one will know this data ever existed in the first place.',
    'reset_desc' => 'هل ترغب في إعادة تعيين حسابك؟ هذا سيؤدي إلى إزالة جهات إتصالك، و جميع بيانتهم. حسابك لن يتم حذفه.',
    'reset_title' => 'أعد تعيين حسابك',
    'reset_cta' => 'إعادة تعيين الحساب',
    'reset_notice' => 'هل أنت متأكد من إعادة تعيين حسابك؟ ليس هنالك عودة.',
    'reset_success' => 'لقد تم إعادة تعيين حسابك بنجاح',
    'delete_notice' => 'هل أنت متأكد من حذف حسابك؟ ليس هنالك عودة.',
    'delete_cta' => 'حذف الحساب',
    'settings_success' => 'تم تحديث التفضيلات!',
    'locale' => 'اللغة المستخدمة في هذا التطبيق',
    'locale_help' => 'Do you want to help translating Monica or add a new language? Please follow <a href=":url" target="_blank" lang="en">this link for more information</a>.',
    'locale_ar' => 'العربية',
    'locale_cs' => 'التشيكية',
    'locale_de' => 'الألمانية',
    'locale_en' => 'الإنجليزية',
    'locale_es' => 'الإسبانية',
    'locale_fr' => 'الفرنسية',
    'locale_he' => 'العبرية',
    'locale_hr' => 'الكرواتية',
    'locale_it' => 'الإيطالية',
    'locale_ja' => 'Japanese',
    'locale_nl' => 'الهولندية',
    'locale_pt' => 'البرتغالية',
    'locale_pt-BR' => 'Portuguese (Brazil)',
    'locale_ru' => 'الروسية',
    'locale_zh' => 'الصينية المبسطة',
    'locale_tr' => 'التركية',
    'locale_en-GB' => 'English (United Kingdom)',

    'security_title' => 'الأمن',
    'security_help' => 'قم بتغيير المسائل الأمنية للحساب الخاص بك.',
    'password_change' => 'تغيير كلمة المرور',
    'password_current' => 'كلمة السر الحالية',
    'password_current_placeholder' => 'أدخل كلمة مرورك الحالية',
    'password_new1' => 'كلمة مرور جديدة',
    'password_new1_placeholder' => 'أدخل كلمة مرور جديدة',
    'password_new2' => 'تأكيد',
    'password_new2_placeholder' => 'أعد كتابة كلمة المرور الجديدة',
    'password_btn' => 'تغيير كلمة المرور',
    '2fa_title' => 'المصادقة الثنائية',
    '2fa_otp_title' => 'تطبيق المصادقة الثنائية',
    '2fa_enable_title' => 'تمكين المصادقة الثنائية',
    '2fa_enable_description' => 'تمكين المصادقة الثنائية لزيادة أمن حسابك.',
    '2fa_enable_otp' => 'قم بفتح تطبيق المصادقة الثنائية في هاتفك و انسخ الرمز التالي:',
    '2fa_enable_otp_help' => 'إذا كان تطبيقك للمصادقة الثنائية لا يدعم QR barcodes، فأدخل الرمز التالي:',
    '2fa_enable_otp_validate' => 'الرجاء التحقق من صحة الجهاز الجديد الذي قمت بتعيينه للتو:',
    '2fa_enable_success' => 'تم تفعيل المصادقة الثنائية',
    '2fa_enable_error' => 'حدث خطأ عند محاولة تنشيط المصادقة الثنائية',
    '2fa_enable_error_already_set' => 'تم تفعيل المصادقة الثنائية مسبقاً',
    '2fa_disable_title' => 'تعطيل المصادقة الثنائية',
    '2fa_disable_description' => 'تعطيل المصادقة الثنائية لحسابك. كن حذراً، لن يكون حسابك آمناً بعد الآن!',
    '2fa_disable_success' => 'تم تعطيل المصادقة الثنائية',
    '2fa_disable_error' => 'حدث خطأ عند محاولة تعطيل المصادقة الثنائية',

    'webauthn_title' => 'Security key — WebAuthn protocol',
    'webauthn_enable_description' => 'Add a new security key',
    'webauthn_key_name_help' => 'Give your key a name.',
    'webauthn_key_name' => 'Key name:',
    'webauthn_success' => 'Your key is detected and validated.',
    'webauthn_last_use' => 'Last use: {timestamp}',
    'webauthn_delete_confirmation' => 'Are you sure you want to delete this key?',
    'webauthn_delete_success' => 'Key deleted',
    'webauthn_insertKey' => 'Insert your security key.',
    'webauthn_buttonAdvise' => 'If your security key has a button, press it.',
    'webauthn_noButtonAdvise' => 'If it does not, remove it and insert it again.',
    'webauthn_not_supported' => 'Your browser doesn’t currently support WebAuthn.',
    'webauthn_not_secured' => 'WebAuthn only supports secure connections. Please load this page with https scheme.',
    'webauthn_error_already_used' => 'This key is already registered. It’s not necessary to register it again.',
    'webauthn_error_not_allowed' => 'The operation either timed out or was not allowed.',

    'recovery_title' => 'Recovery codes',
    'recovery_show' => 'Get recovery codes',
    'recovery_copy_help' => 'Copy codes in your clipboard',
    'recovery_help_intro' => 'These are your recovery codes:',
    'recovery_help_information' => 'You can use each recovery code once.',
    'recovery_clipboard' => 'Codes copied in the clipboard',
    'recovery_generate' => 'Generate new codes...',
    'recovery_generate_help' => 'Be aware that generating new codes will invalidate previously generated codes',
    'recovery_already_used_help' => 'This code has already been used',

    'users_list_title' => 'المستخدمين الذين لديهم حق الوصول إلى حسابك',
    'users_list_add_user' => 'دعوة مستخدم جديد',
    'users_list_you' => 'هذا أنت',
    'users_list_invitations_title' => 'دعوات معلقة',
    'users_list_invitations_explanation' => 'فيما يلي الأشخاص الذين قمتَ بدعوتهم للإنضمام إلى Monica كمتعاون.',
    'users_list_invitations_invited_by' => 'دعوة من :name',
    'users_list_invitations_sent_date' => 'تم الإرسال في :date',
    'users_blank_title' => 'أنت الشخص الوحيد الذي لديه حق الوصول إلى هذا الحساب.',
    'users_blank_add_title' => 'هل ترغب في دعوة شخص آخر؟',
    'users_blank_description' => 'هذا الشخص سيكون له نفس حق الوصول الذي لديك، وسيكون قادراً على إضافة أو تحرير أو حذف معلومات جهة الاتصال.',
    'users_blank_cta' => 'دعوة شخص ما',
    'users_add_title' => 'دعوة مستخدم جديد عن طريق البريد الإلكتروني لحسابك',
    'users_add_description' => 'هذا الشخص سيكون له نفس الحقوق التي لديك، بما في ذلك دعوة مستخدمين آخرين وحذفهم (بما فيهم أنت). و لذلك، تأكد بأنك تثق بهذا الشخص.',
    'users_add_email_field' => 'أدخل عنوان البريد الإلكتروني للشخص الذي تريد دعوته',
    'users_add_confirmation' => 'أؤكد بأني أريد دعوة هذا المستخدم لحسابي. هذا الشخص سيتمكن من الوصول لكل بياناتي و رؤية ما أراه بالضبط.',
    'users_add_cta' => 'دعوة المستخدم عن طريق البريد الإلكتروني',
    'users_accept_title' => 'قبول الدعوة و إنشاء حساب جديد',
    'users_error_please_confirm' => 'الرجاء التأكيد بأنك تريد دعوة هذا المستخدم قبل مواصلة الدعوة',
    'users_error_email_already_taken' => 'هذا البريد الإلكتروني موجود بالفعل. الرجاء إدخال بريد إلكتروني آخر',
    'users_error_already_invited' => 'لقد قمت بدعوة هذا المستخدم مسبقاً. الرجاء اختيار بريد آخر.',
    'users_error_email_not_similar' => 'هذا ليس عنوان بريد الشخص الذي قمتَ بدعوته.',
    'users_invitation_deleted_confirmation_message' => 'لقد تم حذف الدعوة بنجاح',
    'users_invitations_delete_confirmation' => 'هل أنت متأكد من حذف هذه الدعوة؟',
    'users_list_delete_confirmation' => 'هل أنت متأكد من حذف هذا المستخدم من حسابك؟',
    'users_invitation_need_subscription' => 'إضافة المزيد من المستخدمين يتطلب الإشتراك.',

    'subscriptions_account_current_plan' => 'خطتك الحالية',
    'subscriptions_account_current_paid_plan' => 'أنت على الخطة :name. شكراً جزيلاً لكونك مشتركاً.',
    'subscriptions_account_next_billing' => 'Your subscription will auto-renew on <strong>:date</strong>.',
    'subscriptions_account_cancel' => 'You can <a href=":url">cancel subscription</a> anytime.',
    'subscriptions_account_free_plan' => 'أنت في الخطة المجانية.',
    'subscriptions_account_free_plan_upgrade' => 'تستطيع ترقية حسابك لخطة :name، و التي تكلف :price$ شهرياً. هذه هي المنافع:',
    'subscriptions_account_free_plan_benefits_users' => 'عدد لا نهائي من المستخدمين',
    'subscriptions_account_free_plan_benefits_reminders' => 'تذكير بواسطة البريد اإلكتروني',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => 'قم بإستيراد جهات اتصالك مع vCard',
    'subscriptions_account_free_plan_benefits_support' => 'قم بدعم المشروع، لكي نستطيع تعريف المزيد من الميزات الرائعة.',
    'subscriptions_account_upgrade' => 'قم بترقية حسابك',
    'subscriptions_account_upgrade_title' => 'قم بترقية Monica اليوم و احصل على علاقات أكثر أهمية.',
    'subscriptions_account_upgrade_choice' => 'اختر خطة أدناه و انضم إلى :customers الأشخاص الذين قاموا بترقية Monica الخاص بهم.',
    'subscriptions_account_invoices' => 'الفواتير',
    'subscriptions_account_invoices_download' => 'تنزيل',
    'subscriptions_account_invoices_subscription' => 'Subscription from :startDate to :endDate',
    'subscriptions_account_payment' => 'أي خيار للدفع يناسبك أكثر؟',
    'subscriptions_account_confirm_payment' => 'Your payment is currently incomplete, please <a href=":url">confirm your payment</a>.',
    'subscriptions_downgrade_title' => 'قم بخفض مرتبة حسابك للخطة المجانية',
    'subscriptions_downgrade_limitations' => 'خطتك المجانية فيها قيود. لتمكين خفض المرتبة، يجب أن تجتاز القائمة أدناه:',
    'subscriptions_downgrade_rule_users' => 'يجب أن يكون لديك مستخدم 1 فقط في حسابك',
    'subscriptions_downgrade_rule_users_constraint' => 'حالياً لديك <a href=":url">مستخدم واحد</a> في حسابك. | لديك حالياً <a href=":url">:count مستخدمين</a> في حسابك.',
    'subscriptions_downgrade_rule_invitations' => 'يجب ألا يكون لديك دعوات معلقة',
    'subscriptions_downgrade_rule_invitations_constraint' => 'لديك حالياً <a href=":url">دعوة 1 معلقة</a> قد أُرسلت.| لديك حالياً <a href=":url">:count دعوات معلقة</a> قد أُرسلت.',
    'subscriptions_downgrade_rule_contacts' => 'You must not have more than :number active contacts',
    'subscriptions_downgrade_rule_contacts_constraint' => 'لديك حالياً <a href=":url"> جهة اتصال واحدة</a>.| لديك حالياً <a href=":url">:count جهات اتصال</a>.',
    'subscriptions_downgrade_cta' => 'خفض المرتبة',
    'subscriptions_downgrade_success' => 'لقد عدتَ للخطة المجانية!',
    'subscriptions_downgrade_thanks' => 'شكراً جزيلاً لك لتجربة الخطة المدفوعة. نحن نواصل الإستمرار بإضافة ميزات جديدة في Monica - لذا قد تريد العودة في المستقبل لترى إذا كنتَ مهتماً بالإشتراك مجدداً.',
    'subscriptions_back' => 'العودة للإعدادات',
    'subscriptions_upgrade_title' => 'قم بترقية حسابك',
    'subscriptions_upgrade_choose' => 'لقد اخترت خطة :plan.',
    'subscriptions_upgrade_infos' => 'لا يمكننا أن نكون أكثر سعادة. أدخل بيانات دفعك أدناه.',
    'subscriptions_upgrade_name' => 'الإسم على البطاقة',
    'subscriptions_upgrade_zip' => 'الرمز البريدي',
    'subscriptions_upgrade_credit' => 'بطاقة الإئتمان أو بطاقة الصراف',
    'subscriptions_upgrade_submit' => 'Pay {amount}',
    'subscriptions_upgrade_charge' => 'We’ll charge your card :price now. The next charge will be on :date. If you ever change your mind, you can cancel anytime, no questions asked.',
    'subscriptions_upgrade_charge_handled' => 'الدفع يتولاه <a href=":url">Stripe</a>. لا تلمس معلومات البطاقات خادمنا.',
    'subscriptions_upgrade_success' => 'شكراً لك! أنت مشترك الآن.',
    'subscriptions_upgrade_thanks' => 'مرحباً بك في مجتمع الأشخاص الذين يحاولون جعل العالم مكاناً أفضل.',

    'subscriptions_payment_confirm_title' => 'Confirm your :amount payment',
    'subscriptions_payment_confirm_information' => 'Extra confirmation is needed to process your payment. Please confirm your payment by filling out your payment details below.',
    'subscriptions_payment_succeeded_title' => 'Payment Successful',
    'subscriptions_payment_succeeded' => 'This payment was already successfully confirmed.',
    'subscriptions_payment_cancelled_title' => 'Payment Cancelled',
    'subscriptions_payment_cancelled' => 'This payment was cancelled.',
    'subscriptions_payment_error_name' => 'Please provide your name.',
    'subscriptions_payment_success' => 'The payment was successful.',

    'subscriptions_pdf_title' => 'اشتراكك :name الشهري',
    'subscriptions_plan_choose' => 'اختر هذه الخطة',
    'subscriptions_plan_year_title' => 'دفع سنوي',
    'subscriptions_plan_year_cost' => '45$/سنوياً',
    'subscriptions_plan_year_cost_save' => 'ستوفر 25%',
    'subscriptions_plan_year_bonus' => 'راحة البال لسنة كاملة',
    'subscriptions_plan_month_title' => 'دفع شهري',
    'subscriptions_plan_month_cost' => '5$/شهرياً',
    'subscriptions_plan_month_bonus' => 'قم بالإلغاء في أي وقت',
    'subscriptions_plan_include1' => 'تشمل الترقية الخاصة بك:',
    'subscriptions_plan_include2' => 'عدد لا نهائي من جهات الإتصال • عدد لا نهائي من المستخدمين • تذكير عبر البريد الإلكتروني • استيراد بـvCard • تخصيص صفحة جهة الإتصال',
    'subscriptions_plan_include3' => '100% من الأرباح تذهب لتطوير هذا المشروع المفتوح المصدر الرائع.',
    'subscriptions_help_title' => 'تفاصيل إضافية قد تكون مهتماً بمعرفتها',
    'subscriptions_help_opensource_title' => 'ما هو المشروع المفتوح المصدر؟',
    'subscriptions_help_opensource_desc' => 'Monica is an open source project. This means it is built by an entirely benevolent community who just wants to provide a great tool for the greater good. Being open source means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. All the money we raise is dedicated to build better features, have more powerful servers, help pay the bills. Thanks for your help. We couldn’t do it without you – literally.',
    'subscriptions_help_limits_title' => 'هل هناك حد لعدد جهات الإتصال الذين يمكننا إضافتهم في الخطة المجانية؟',
    'subscriptions_help_limits_plan' => 'نعم. الخطط المجانية تدَعُك تُدِير:number جهات إتصال.',
    'subscriptions_help_discounts_title' => 'هل لديكم تخفيضات لأسباب غير ربحية أو للتعليم؟',
    'subscriptions_help_discounts_desc' => 'نعم لدينا! تطبيق Monica مجاني للطلاب، و مجاني لأسباب غير ربحية و للمؤسسات الخيرية. فقط تواصل مع <a href=":support">الدعم</a> بدليل على حالتك و سنقوم بتطبيق هذه الحالة الخاصة في حسابك.',
    'subscriptions_help_change_title' => 'ماذا إذا قمتُ بتغيير رأيي؟',
    'subscriptions_help_change_desc' => 'يمكنك الإلغاء في أي وقت، بدون أي أسئلة، و كله بنفسك - لا حاجة للإتصال بالدعم، أو أيا كان. ومع ذلك، لن يعاد لك أي مال للفترة الحالية.',

    'stripe_error_card' => 'تم رفض بطاقتك. الرسالة المنحدرة: :message',
    'stripe_error_api_connection' => 'فشل الإتصال مع Stripe. حاول مجدداً لاحقاً.',
    'stripe_error_rate_limit' => 'يوجد عدد كبير من الطلبات على Stripe الآن. حاول مجدداً لاحقاً.',
    'stripe_error_invalid_request' => 'Invalid parameters. Try again later.',
    'stripe_error_authentication' => 'خطأ مصادقة مع Stripe',

    'import_title' => 'استيراد جهات الاتصال إلى حسابك',
    'import_cta' => 'تحميل جهات الإتصال',
    'import_stat' => 'قمت بإستيراد :number ملفات حتى الآن.',
    'import_result_stat' => 'Uploaded vCard with 1 contact (:total_imported imported, :total_skipped skipped)|Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => 'عرض التقرير',
    'import_in_progress' => 'الاستيراد قيد التقدم. أعد تحميل الصفحة في دقيقة واحدة.',
    'import_upload_title' => 'قم بإستيراد جهات اتصالك من ملف vCard',
    'import_upload_rules_desc' => 'و لكن لدينا بعض الشروط:',
    'import_upload_rule_format' => 'نحن ندعم ملفات <code>.vcard</code> و <code>.vcf</code>.',
    'import_upload_rule_vcard' => 'نحن ندعم صيغة vCard 3.0، وهي الصيغة الافتراضية لـContacts.app (ماك) و Google Contacts.',
    'import_upload_rule_instructions' => 'تصدير تعليمات <a href=":url1" target="_blank" rel="noopener noreferrer">Contacts.app (macOS)</a> و <a href=":url2" target="_blank" rel="noopener noreferrer">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'حالياً، إذا كان لدى جهات اتصالك عدة عناوين بريد و أرقام هواتف، فقط الإدخال الأول سيؤخذ في عين الإعتبار.',
    'import_upload_rule_limit' => 'تقتصر الملفات إلى 10 ميغا بايت.',
    'import_upload_rule_time' => 'قد يستغرق الأمر إلى 1 دقيقة لتحميل جهات الاتصال و معالجتها. الرجاء التحلي بالصبر.',
    'import_upload_rule_cant_revert' => 'تأكد من أن البيانات دقيقة قبل تحميلها، لأنه لا يمكنك التراجع عن التحميل.',
    'import_upload_form_file' => 'ملف <code>.vcf</code> أو <code>.vCard</code> الخاص بك:',
    'import_upload_behaviour' => 'سلوك الاستيراد:',
    'import_upload_behaviour_add' => 'إضافة جهات اتصال جديدة، وتخطى الموجودة',
    'import_upload_behaviour_replace' => 'استبدال جهات الاتصال الموجودة',
    'import_upload_behaviour_help' => 'ملاحظة: الإستبدال سيستبدل كل البيانات الموجودة في vCard، لكن سيبقي حقول جهات الإتصال الموجودة.',
    'import_report_title' => 'تقرير الإستيراد',
    'import_report_date' => 'تاريخ الإستيراد',
    'import_report_type' => 'نوع الإستيراد',
    'import_report_number_contacts' => 'عدد جهات الإتصال في الملف',
    'import_report_number_contacts_imported' => 'عدد جهات الإتصال المستوردة',
    'import_report_number_contacts_skipped' => 'عدد جهات الإتصال المتخطى عنها',
    'import_report_status_imported' => 'تم استيراده',
    'import_report_status_skipped' => 'تم تخطيه',
    'import_vcard_parse_error' => 'Error when parsing the vCard entry',
    'import_vcard_contact_exist' => 'جهة الإتصال موجودة مسبقاً',
    'import_vcard_contact_no_firstname' => 'لا اسم أول (مطلوب)',
    'import_vcard_file_not_found' => 'لم يتم إيجاد الملف',
    'import_vcard_unknown_entry' => 'جهة اتصال غير معروفة',
    'import_vcard_file_no_entries' => 'لا يوجد إدخالات في الملف',
    'import_blank_title' => 'لم تقم بإستيراد أي جهات إتصال بعد.',
    'import_blank_question' => 'هل تريد استيراد جهات الإتصال الآن؟',
    'import_blank_description' => 'يمكننا استيراد ملفات vCard التي يمكن أن تحصل عليها من جهات اتصال Google أو مدير جهات الاتصال الخاصة بك.',
    'import_blank_cta' => 'استيراد vCard',
    'import_need_subscription' => 'استيراد البيانات يتطلب اشتراكاً.',

    'tags_list_title' => 'Tags',
    'tags_list_description' => 'You can organize your contacts by setting up tags. Tags work like folders, but you can add more than one tag to a contact. To add a new tag, add it on the contact itself.',
    'tags_list_contact_number' => '1 جهة اتصال|:count جهات اتصال',
    'tags_list_delete_success' => 'The tag has been successfully deleted',
    'tags_list_delete_confirmation' => 'Are you sure you want to delete the tag? No contacts will be deleted, only the tag.',
    'tags_blank_title' => 'Tags are a great way of categorizing your contacts.',
    'tags_blank_description' => 'Tags work like folders, but you can add more than one tag to a contact. Go to a contact and tag a friend, right below the name. Once a contact is tagged, go back here to manage all the tags in your account.',

    'api_title' => 'الوصول إلى API',
    'api_description' => 'The API can be used to manipulate Monica’s data from an external application, like a mobile application for instance.',
    'api_help' => 'To use the API, a token is mandatory. You can either create a personal access token (Bearer authentication), or authorize an OAuth client to create it for you. See <a href=":url">API documentation</a>.',
    'api_endpoint' => 'The API endpoint for this Monica instance is:',

    'api_personal_access_tokens' => 'Personal access tokens',
    'api_pao_description' => 'Make sure you give this token to a source you trust – as they allow you to access all your data.',
    'api_token_title' => 'Personal Access Tokens',
    'api_token_create_new' => 'Create New Token',
    'api_token_not_created' => 'You have not created any personal access tokens.',
    'api_token_name' => 'Token name',
    'api_token_expire' => 'Expires at {date}',
    'api_token_delete' => 'حذف',
    'api_token_create' => 'Create Token',
    'api_token_scopes' => 'Scopes',
    'api_token_help' => 'Here is your new personal access token. This is the only time it will be shown so don’t lose it! You may now use this token to make API requests.',

    'api_oauth_clients' => 'Your OAuth clients',
    'api_oauth_clients_desc' => 'هذا القسم يتيح لك تسجيل عملاء OAuth الخاصين بك.',
    'api_oauth_clients_desc2' => 'Use this client id to request a new token, and convert authorization codes to access tokens. See <a href="{url}">Laravel Passport documentation</a> for more information.',
    'api_oauth_title' => 'OAuth Clients',
    'api_oauth_create_new' => 'إنشاء عميل جديد',
    'api_oauth_edit' => 'Edit Client',
    'api_oauth_not_created' => 'لم تقم بإنشاء أي عملاء OAuth.',
    'api_oauth_clientid' => 'معرف العميل',
    'api_oauth_name' => 'الاسم',
    'api_oauth_name_help' => 'شيء سيَتَعرف عليه مستخدمونك و يثقون به.',
    'api_oauth_secret' => 'سري',
    'api_oauth_create' => 'إنشاء عميل',
    'api_oauth_redirecturl' => 'رابط إعادة التوجيه',
    'api_oauth_redirecturl_help' => 'Your application’s authorization callback URL.',

    'api_authorized_clients' => 'قائمة العملاء المصرح بهم',
    'api_authorized_clients_desc' => 'This section lists all the clients you’ve authorized to access your application data. You can revoke this authorization at anytime.',
    'api_authorized_clients_title' => 'التطبيقات المصرحة بها',
    'api_authorized_clients_none' => 'There is no authorized client yet.',
    'api_authorized_clients_name' => 'الاسم',
    'api_authorized_clients_scopes' => 'Scopes',

    'personalization_tab_title' => 'قم بتخصيص حسابك',

    'personalization_title' => 'هنا يمكنك إيجاد إعدادات مختلفة لتهيئة حسابك. هذه الميزات تفيد "المستخدمين المميزين" أكثر، الذين يريدون سيطرة قصوى على Monica.',
    'personalization_contact_field_type_title' => 'أنواع حقول جهة الإتصال',
    'personalization_contact_field_type_add' => 'أضف نوع حقل جديد',
    'personalization_contact_field_type_description' => 'هنا يمكنك تهيئة جميع الأنواع المختلفة من حقول جهة الإتصال التي يمكنك الإقتران بها. في المستقبل، إذا ظهرت شبكة إجتماعية جديدة، ستتمكن من إضافة هذا النوع الجديد من الطرق للتواصل مع جهات إتصالك.',
    'personalization_contact_field_type_table_name' => 'الاسم',
    'personalization_contact_field_type_table_protocol' => 'النظام',
    'personalization_contact_field_type_table_actions' => 'إجراءات',
    'personalization_contact_field_type_modal_title' => 'إضافة نوع حقل جهة اتصال جديد',
    'personalization_contact_field_type_modal_edit_title' => 'تحرير نوع حقل جهة اتصال موجود',
    'personalization_contact_field_type_modal_delete_title' => 'حذف نوع حقل جهة اتصال موجود',
    'personalization_contact_field_type_modal_delete_description' => 'Are you sure you want to delete this contact field type? Deleting this type of contact field will delete ALL the data with this type for all your contacts.',
    'personalization_contact_field_type_modal_name' => 'الاسم',
    'personalization_contact_field_type_modal_protocol' => 'النظام (إختياري)',
    'personalization_contact_field_type_modal_protocol_help' => 'Each new contact field type can be clickable. If a protocol is set, we will use it to trigger the action that is set.',
    'personalization_contact_field_type_modal_icon' => 'الأيقونة (اختياري)',
    'personalization_contact_field_type_modal_icon_help' => 'You can associate an icon with this contact field type. You need to add a reference to a Font Awesome icon.',
    'personalization_contact_field_type_delete_success' => 'The contact field type has been deleted with success.',
    'personalization_contact_field_type_add_success' => 'The contact field type has been successfully added.',
    'personalization_contact_field_type_edit_success' => 'The contact field type has been successfully updated.',

    'personalization_genders_title' => 'أنواع الجنس',
    'personalization_genders_add' => 'إضافة نوع جنس جديد',
    'personalization_genders_desc' => 'You can define as many genders as you need to. You need at least one gender type in your account.',
    'personalization_genders_modal_add' => 'إضافة نوع جنس',
    'personalization_genders_modal_edit' => 'تحديث نوع الجنس',
    'personalization_genders_modal_name' => 'Name',
    'personalization_genders_modal_name_help' => 'The name used to display the gender on a contact page.',
    'personalization_genders_modal_sex' => 'Sex',
    'personalization_genders_modal_sex_help' => 'Used to define the relationships, and during the VCard import/export process.',
    'personalization_genders_modal_default' => 'Select the default gender for a new contact',
    'personalization_genders_modal_delete' => 'حذف نوع الجنس',
    'personalization_genders_modal_delete_desc' => 'هل أنت متأكد من حذف {name}؟',
    'personalization_genders_modal_delete_question' => 'حاليا لديك {count} جهة اتصال لديها هذا النوع من الجنس. إذا قمت بحذف هذا الجنس، فأي نوع يجب أن تكون جهة الاتصال هذه؟| لديك حاليا {count} جهات اتصال لديها هذا النوع من الجنس. إذا قمت بحذف هذا الجنس، ما بين فأي نوع يجب أن تكون جهات الإتصال هؤلاء؟',
    'personalization_genders_modal_delete_question_default' => 'This gender is the default one. If you delete this gender, which one will be the next default?',
    'personalization_genders_modal_error' => 'الرجاء اختيار نوع جنس صالح من القائمة.',
    'personalization_genders_list_contact_number' => '{count} contact|{count} contacts',
    'personalization_genders_table_name' => 'Name',
    'personalization_genders_table_sex' => 'Sex',
    'personalization_genders_table_default' => 'Default',
    'personalization_genders_default' => 'Default gender',
    'personalization_genders_make_default' => 'Change default gender',
    'personalization_genders_select_default' => 'Select default gender',
    'personalization_genders_m' => 'Male',
    'personalization_genders_f' => 'Female',
    'personalization_genders_o' => 'Other',
    'personalization_genders_u' => 'Unknown',
    'personalization_genders_n' => 'None or not applicable',

    'personalization_reminder_rule_save' => 'لقد تم حفظ التغيير',
    'personalization_reminder_rule_title' => 'شروط التذكير',
    'personalization_reminder_rule_line' => 'قبل {count} يوم | قبل {count} أيام',
    'personalization_reminder_rule_desc' => 'لكل تذكير تقوم بتعيينه، نستطيع إرسال بريد قبل حصول الحدث بعدة أيام. تستطيع تبديل هذه الإشعارات هنا. علماً بأن هذه الإشعارات تنطبق فقط على التذكيرات الشهرية والسنوية.',

    'personalization_module_save' => 'لقد تم حفظ التغيير',
    'personalization_module_title' => 'الميزات',
    'personalization_module_desc' => 'بعض الأشخاص لا يحتاجون كل الميزات. يمكنك أدناه تبديل ميزات معينة و التي تُستخدم على صفحة جهة الإتصال. هذا التغيير سيؤثر على جميع جهات اتصالك. علماً بأنك إذا قمت بتعطيل إحدى الميزات، فلن تُحذف البيانات - سنقوم ببساطة بإخفاء هذه الميزة.',

    'personalisation_paid_upgrade' => 'This is a premium feature that requires a Paid subscription to be active. Upgrade your account by visiting <a href=":url">Settings > Subscription</a>.',
    'personalisation_paid_upgrade_vue' => 'This is a premium feature that requires a Paid subscription to be active. Upgrade your account by visiting <a href="{url}">Settings > Subscription</a>.',

    'reminder_time_to_send' => 'وقت تذكيرات اليوم يجب أن قد تم إرسالها',
    'reminder_time_to_send_help' => 'لمعلوماتك، تذكيرك القادم سيرسل في <span title="{dateTimeUtc}" class="reminder-info">{dateTime}</span>.',

    'personalization_activity_type_category_title' => 'تصنيفات نوع النشاط',
    'personalization_activity_type_category_add' => 'إضافة فئة نوع نشاط جديد',
    'personalization_activity_type_category_table_name' => 'الاسم',
    'personalization_activity_type_category_description' => 'أي نشاط تم مع أي جهة اتصال لك، يمكن أن يكون لها نوع و فئة. حسابك يأتي افتراضياً مع عدة أنواع للفئات، لكنك تستطيع تخصيص كل شيء هنا.',
    'personalization_activity_type_category_table_actions' => 'إجراءات',
    'personalization_activity_type_category_modal_add' => 'إضافة فئة نوع نشاط جديد',
    'personalization_activity_type_category_modal_edit' => 'تحرير فئة نوع نشاط',
    'personalization_activity_type_category_modal_question' => 'كيف ينبغي لنا تسمية هذه الفئة الجديدة؟',
    'personalization_activity_type_add_button' => 'أضف نوع نشاط جديد',
    'personalization_activity_type_modal_add' => 'أضف نوع نشاط جديد',
    'personalization_activity_type_modal_question' => 'كيف ينبغي لنا تسمية هذا النوع الجديد من النشاط؟',
    'personalization_activity_type_modal_edit' => 'تحرير نوع نشاط',
    'personalization_activity_type_category_modal_delete' => 'حذف فئة نوع نشاط',
    'personalization_activity_type_category_modal_delete_desc' => 'هل أنت متأكد من حذف هذه الفئة؟ حذفها سيزيل كل أنواع الأنشطة المرتبطة بها. لكن، الأنشطة التي تعود لهذه الفئة لن تتأثر بهذا الحذف.',
    'personalization_activity_type_modal_delete' => 'حذف نوع نشاط',
    'personalization_activity_type_modal_delete_desc' => 'هل أنت متأكد من حذف نوع هذا النشاط؟ الأنشطة التي تعود لهذه الفئة لن تتأثر بهذا الحذف.',
    'personalization_activity_type_modal_delete_error' => 'لا نستطيع إيجاد نوع هذا النشاط.',
    'personalization_activity_type_category_modal_delete_error' => 'لا نستطيع إيجاد تصنيف هذا النوع من الأنشطة.',

    'personalization_life_event_category_work_education' => 'العمل و التعليم',
    'personalization_life_event_category_family_relationships' => 'العائلة و العلاقات',
    'personalization_life_event_category_home_living' => 'المنزل و العيش',
    'personalization_life_event_category_travel_experiences' => 'السفر و الخبرات',
    'personalization_life_event_category_health_wellness' => 'الصحة و العافية',

    'personalization_life_event_type_new_job' => 'عمل جديد',
    'personalization_life_event_type_retirement' => 'التقاعد',
    'personalization_life_event_type_new_school' => 'مدرسة جديدة',
    'personalization_life_event_type_study_abroad' => 'الدراسة في الخارج',
    'personalization_life_event_type_volunteer_work' => 'عمل تطوعي',
    'personalization_life_event_type_published_book_or_paper' => 'نشر كتاب أو مقال',
    'personalization_life_event_type_military_service' => 'خدمة عسكرية',
    'personalization_life_event_type_first_met' => 'أول لقاء',
    'personalization_life_event_type_new_relationship' => 'علاقة جديدة',
    'personalization_life_event_type_engagement' => 'الخطوبة',
    'personalization_life_event_type_marriage' => 'الزواج',
    'personalization_life_event_type_anniversary' => 'ذكرى',
    'personalization_life_event_type_expecting_a_baby' => 'انتظار مولود',
    'personalization_life_event_type_new_child' => 'طفل جديد',
    'personalization_life_event_type_new_family_member' => 'فرد جديد في العائلة',
    'personalization_life_event_type_new_pet' => 'حيوان أليف جديد',
    'personalization_life_event_type_end_of_relationship' => 'نهاية علاقة',
    'personalization_life_event_type_loss_of_a_loved_one' => 'Loss of a loved one',
    'personalization_life_event_type_moved' => 'إنتقال',
    'personalization_life_event_type_bought_a_home' => 'شراء منزل',
    'personalization_life_event_type_home_improvement' => 'ترميم المنزل',
    'personalization_life_event_type_holidays' => 'العطل',
    'personalization_life_event_type_new_vehicle' => 'مركبة جديدة',
    'personalization_life_event_type_new_roommate' => 'رفيق سكن جديد',
    'personalization_life_event_type_overcame_an_illness' => 'التغلب على المرض',
    'personalization_life_event_type_quit_a_habit' => 'الإقلاع عن عادة',
    'personalization_life_event_type_new_eating_habits' => 'عادات أكل جديدة',
    'personalization_life_event_type_weight_loss' => 'فقدان الوزن',
    'personalization_life_event_type_wear_glass_or_contact' => 'إرتداء نظارة أو عدسة',
    'personalization_life_event_type_broken_bone' => 'عظم مكسور',
    'personalization_life_event_type_removed_braces' => 'إزالة تقويم الأسنان',
    'personalization_life_event_type_surgery' => 'جراحة',
    'personalization_life_event_type_dentist' => 'طبيب الأسنان',
    'personalization_life_event_type_new_sport' => 'رياضة جديدة',
    'personalization_life_event_type_new_hobby' => 'هواية جديدة',
    'personalization_life_event_type_new_instrument' => 'آلة جديدة',
    'personalization_life_event_type_new_language' => 'لغة جديدة',
    'personalization_life_event_type_tattoo_or_piercing' => 'وشم أو ثقب',
    'personalization_life_event_type_new_license' => 'رخصة جديدة',
    'personalization_life_event_type_travel' => 'السفر',
    'personalization_life_event_type_achievement_or_award' => 'إنجاز أو جائزة',
    'personalization_life_event_type_changed_beliefs' => 'تغير المعتقدات',
    'personalization_life_event_type_first_word' => 'أول كلمة',
    'personalization_life_event_type_first_kiss' => 'First kiss',

    'storage_title' => 'Storage',
    'storage_account_info' => 'Your account limit: :accountLimit Mb /  Your current usage: :currentAccountSize Mb (:percentUsage%)',
    'storage_upgrade_notice' => 'Upgrade your account to be able to upload documents and photos.',
    'storage_description' => 'Here you can see all the documents and photos uploaded about your contacts.',

    'dav_title' => 'WebDAV',
    'dav_description' => 'Here you can find all settings to use WebDAV resources for CardDAV and CalDAV exports.',
    'dav_copy_help' => 'Copy into your clipboard',
    'dav_clipboard_copied' => 'Value copied into your clipboard',
    'dav_url_base' => 'Base url for all CardDAV and CalDAV resources:',
    'dav_connect_help' => 'You can connect your contacts and/or calendars with this base url on you phone or computer.',
    'dav_connect_help2' => 'Use your login (email) and password, or create an API token to authenticate.',
    'dav_url_carddav' => 'CardDAV url for Contacts resource:',
    'dav_url_caldav_birthdays' => 'CalDAV url for Birthdays resources:',
    'dav_url_caldav_tasks' => 'CalDAV url for Tasks resources:',
    'dav_title_carddav' => 'CardDAV',
    'dav_title_caldav' => 'CalDAV',
    'dav_carddav_export' => 'Export all contacts in one file',
    'dav_caldav_birthdays_export' => 'Export all birthdays in one file',
    'dav_caldav_tasks_export' => 'Export all tasks in one file',

    'archive_title' => 'Archive all your contacts in your account',
    'archive_desc' => 'This will archive all the contacts in your account.',
    'archive_cta' => 'Archive all your contacts',

    'logs_title' => 'Everything that happened to this account',
    'logs_author' => 'By :name on :date',
];
