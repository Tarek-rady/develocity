<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{

    public function run()
    {

        StaticPage::insert([

            // ============================ about us =========================================
            // شروط عامه
            [
                'title' => 'شروط عامه',

                'desc' => 'يجب تقديم طلب الإرجاع والاسترداد في غضون 14 يومًا من تاريخ الاستلام وحتى 30 يومًا في حالة المنتجات المعيبة',

                'key' => 'General_Terms',
            ] ,

            [
                'title' => 'شروط عامه',

                'desc' => 'يجب أن يتوفر إثبات الشراء (رقم الطلب ، الفاتورة ، إلخ) مع طلب الإرجاع وإلا فسيتم رفض طلبك.',

                'key' => 'General_Terms',
            ] ,

            [
                'title' => 'شروط عامه',

                'desc' => 'يجب توضيح السبب مع طلب الإرجاع والاسترداد للعميل ، مع إستيفاء شروط قبول الإرجاع',

                'key' => 'General_Terms',
            ] ,


            // حالات غير مناسبه للاسترجاع

            [
                'title' => 'حالات غير مناسبه للاسترجاع',

                'desc' => 'يجب تقديم طلب الإرجاع والاسترداد في غضون 14 يومًا من تاريخ الاستلام وحتى 30 يومًا في حالة المنتجات المعيبة',

                'key' => 'Cases_not_suitable_for_return',
            ] ,

            [
                  'title' => 'حالات غير مناسبه للاسترجاع'
                ,

                'desc' => 'يتم تقديم طلب الإرجاع بعد فترة زمنية محددة (14 يومًا حتى 30 يومًا في حالة وجود عناصر معيبة).',

                'key' => 'Cases_not_suitable_for_return',
            ] ,

            [
                  'title' => 'حالات غير مناسبه للاسترجاع'
                ,

                'desc' => 'المنتجات الهشة ، ومنتجات الاستعمال الشخصي',

                'key' => 'Cases_not_suitable_for_return',
            ] ,

            // حالات مناسبه للاستبدال والاسترجاع

            [
                'title' => 'حالات تتناسب للاسترجاع والاستبدال',

                'desc' => 'يجب تقديم طلب الإرجاع والاسترداد في غضون 14 يومًا من تاريخ الاستلام وحتى 30 يومًا في حالة المنتجات المعيبة',

                'key' => 'Cases_suitable_for_return',
            ] ,

            [
                  'title' => 'حالات تتناسب للاسترجاع والاستبدال'
                ,

                'desc' => 'في حالة استلام منتج مختلف ، يمكنك اعادته إلى نفس الحالة التي استلمتها بها (الصندوق الأصلي / تغليف جميع الملصقات والباركود عليها). بمجرد إرجاع المنتج.',

                'key' => 'Cases_suitable_for_return',
            ] ,

            [
                  'title' => 'حالات تتناسب للاسترجاع والاستبدال'
                ,

                'desc' => 'تقديم طلب الاسترجاع في خلال 14 يوم في حالة تغير الرأي بنفس الحالة المستلمة مع (الصندوق الأصلي / العبوة)',

                'key' => 'Cases_suitable_for_return',
            ] ,

            //    ================================== الشروط ولاحكام=======================================

            //  المقدمه
            [
                'title' => 'المقدمه',

                'desc' => 'مرحبا بكم في " البياع " الموقع. من خلال الاستمرار في الوصول إلى هذا الموقع، فإنك تؤكد على تفهمك وقبولك لشروطنا وأحكامنا، إذا لم توافق على الالتزام بأي من الشروط، يرجى عدم الدخول إلى الموقع أو تسجيله أو استخدامه',

                'key' => 'introduction_1',
            ] ,

            [
                'title' => 'المقدمه',

                'desc' => 'حتفظ بحقنا في إضافة أو إزالة أو تغيير أي من سياساتنا وبنودنا وشروطنا في أي وقت، وسوف تكون سارية ومطبقة بمجرد نشرها على الموقع',

                'key' => 'introduction_1',
            ] ,

            // الحساب والتسجيل
            [
                'title' => 'الحساب والتسجيل',

                'desc' => 'تتطلب بعض الخدمات والمميزات الاشتراك أو التسجيل في الموقع.في حين أن التسجيل يطلب منك تقديم معلومات دقيقة وحديثة وكاملة عن نفسك وسوف تقوم بالاحتفاظ بها وتحديثها على الفور إذا تم تغييرها',

                'key' => 'register_and_login',
            ] ,

            [
                'title' => 'الحساب والتسجيل',

                'desc' => 'إذا قمت بتقديم أي معلومات غير صحيحة أو غير دقيقة أو غير حديثة أو غير كاملة عن نفسك لن يتم إكمال أو إنهاء التسجيل الخاص بك',

                'key' => 'register_and_login',
            ] ,

            [
                'title' => 'الحساب والتسجيل',

                'desc' => 'لا يسمح لك بإنشاء أكثر من حساب واحد، ويطلب منك استخدام معلومات دقيقة وحديثة وكاملة فقط',

                'key' => 'register_and_login',
            ] ,

            // الطلبات والاسعار
            [
                'title' => 'الطلبات والاسعار',

                'desc' => 'في بعض الحالات هناك بعض الأسباب التي تجعل طلبك لا يمكن قبولة',

                'key' => 'Orders_and_prices',
            ] ,

            [
                'title' => 'الطلبات والاسعار',

                'desc' => 'نحن نحتفظ بالحق في رفض أو إلغاء أي طلب لأي سبب من الأسباب في أي وقت من الأوقات',

                'key' => 'Orders_and_prices',
            ] ,

            [

                'title' => 'الطلبات والاسعار',

                'desc' => 'بعض المنتجات تخضع لتوافرها وقت الشحن',

                'key' => 'Orders_and_prices',
            ] ,

            // حقوق الملكيه
            [
                'title' => 'حقوق الملكيه',

                'desc' => 'جميع حقوق الملكية الفكرية، سواء كانت مسجلة أو غير مسجلة، في الموقع، من محتوى او معلومات على الموقع وجميع تصميمات الموقع، بما في ذلك، على سبيل المثال لا الحصر، النصوص والرسومات والبرامج والصور والفيديو والموسيقى والصوت وترتيبها، وجميع مجموعات البرمجيات، رمز المصدر الأساسي والبرمجيات تبقى ملكا لنا.كما أن محتويات الموقع بأكملها محمية بموجب حقوق النشر باعتبارها عملا جماعيا بموجب قوانين حقوق الطبع والاتفاقيات الدولية المصرية.جميع الحقوق محفوظة',

                'key' => 'Property_rights',
            ] ,


            //  حمايه البيانات
            [
                'title' => 'حمايه البيانات',

                'desc' => 'أي معلومات شخصية يتم جمعها فيما يتعلق باستخدام هذا الموقع الإلكتروني سيتم استخدامها وفقًا لسياسة الخصوصية الخاصة بنا، والتي تتوفر على موقعنا.وقد نستخدمها لأغراض تجارية',

                'key' => 'data_protection',
            ] ,

            //   تطبيق القوانين والاحكام
            [
                'title' => 'تطبيق القوانين والاحكام',

                'desc' => 'تتوافق هذه الشروط والأحكام وتحكمها القوانين السارية في مصر.يوافق كل طرف بموجب هذا على الخضوع لاختصاص المحاكم المصرية والتنازل عن أي اعتراضات تستند إلى مكان انعقادها',

                'key' => 'Application_of_laws',
            ] ,


            //    حالات الالغاء
            [
                'title' => 'حالات الالغاء',

                'desc' => 'نحتفظ بحقنا في إنهاء وصولك إلى استخدام هذا الموقع في حالة القيام بأي عمل يتعارض مع شروطنا وسياساتنا دون أي إخطار',

                'key' => 'Cancellations',
            ] ,


            //    الضمان
            [
                'title' => 'الضمان',

                'desc' => 'إذا كان المنتج لديه ضمان فإنه سيتم توضيحه على صفحة المنتج',

                'key' => 'Security',
            ] ,


            // =============================== سياسه الخصوصيه ========================================

            //    المقدمه
            [
                'title' => 'المقدمه',

                'desc' => 'خصوصيتك وحماية البيانات الخاصة بك مهمة بالنسبة لنا، ونحن نحترم خصوصيتك ونسعى لحماية المعلومات الشخصية الخاصة بك في كل وقت.ولهذا الغرض، نقوم بتنفيذ سياسة الخصوصية وحماية البيانات التالية، والتي تحدد جوانبنا الرئيسية فيما يتعلق بجمع البيانات واستخدامها على الموقع.سوف نقوم فقط بجمع المعلومات حيث يكون ذلك ضروريا بالنسبة لنا لذلك سوف نقوم بجمع المعلومات فقط إذا كانت ذات صلة تعاملاتنا معك',

                'key' => 'Introduction_2',
            ] ,


            //    جمع ومشاركه البيانات
            [
                'title_ar' => 'جمع ومشاركه البيانات',

                'desc' => 'من خلال تسجيلك على موقعنا، من الضروري تزويدنا بمعلوماتك الشخصية.مثل اسمك وعنوان الشحن ورقم الاتصال و عنوان البريد الإلكتروني ومعلومات أخرى مشابهة بالإضافة إلى بعض المعلومات الإضافية عنك مثل تاريخ ميلادك أو معلومات تعريف أخرى.بالإضافة إلى ذلك، من أجل التحقق من هويتك، قد نحتاج إلى أن نطلب منك إثبات هوية ساري المفعول، كما سيطلب منك تقديم معلومات مالية، مثل بطاقة الائتمان الخاصة بك و/ أو تفاصيل الحساب المصرفي في إجراءات معينة.',

                'key' => 'Data_collection_and_sharing',
            ] ,

             //    الطرف الثالث
            [
                'title_ar' => 'الطرف الثالث',

                'desc' => 'قد نقوم بتمرير أو الكشف عن التفاصيل الخاصة بك لشركات أخرى في مجموعتنا في حالات معينة مثل لا تقتصر على (تقديم المنتجات لك - جمع المدفوعات منك - تحليل البيانات - أبحاث التسويق - دعم العملاء).',

                'key' => 'third_party',
            ] ,

            //    استخدام الكوكيز
            [
                'title_ar' => 'استخدام الكوكيز',

                'desc' => 'ملفات تعريف الارتباط هي ملفات نصية صغيرة تحدد جهاز الكمبيوتر الخاص بك إلى خادمنا كمستخدم فريد عند زيارة صفحات معينة على الموقع ويتم تخزينها من قبل متصفح الإنترنت الخاص بك لجهاز الكمبيوتر الخاص بك',

                'key' => 'Use_of_cookies',
            ] ,

            //    حمايه المعلومات الشخصيه
            [
                'title_ar' => 'حمايه المعلومات الشخصيه',

                'desc' => 'يتم تشفير جميع بطاقات الائتمان المعلومات الشخصية وتاريخ الدفع عند جمعها إلكترونيا في حين يتم تأمين أي شيء 100٪ على بيئة الإنترنت لدينا ترميز نظام آمن يجعل من الصعب أن يكون اخترق.',

                'key' => 'Protection_of_personal_information',
            ] ,




        ]);
    }
}
