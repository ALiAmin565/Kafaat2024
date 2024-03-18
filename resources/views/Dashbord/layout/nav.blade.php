<style>
    .nav-pills .nav-item {
        float: right;
        width: 100%
    }
</style>








<li class="nav-item ">
    <a href="{{ URL('admin/') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            الصفحه الرئيسيه
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>




<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            الشركات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/Company') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> كل الشركات </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ URL('admin/Company_abrove') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> الشركات المعلقه


                </p>

            </a>
        </li>

    </ul>
</li>




{{-- -------------------event-------------------------- --}}

<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            الملتقي
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/event') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> الملقتي </p>
            </a>
        </li>


    </ul>
</li>



<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
           االشركات المشاركة
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ route('company_event') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>

                    اضافه الشركات
                </p>

            </a>
        </li>

    </ul>
</li>


{{--  SectionOne  --}}
<!--<li class="nav-item">-->
<!--    <a href="#" class="nav-link bg-primary">-->
<!--        <i class="fa-solid fa-folder-open"></i>-->
<!--        <p>-->
<!--            القسم الاول بالصفحة-->
<!--            <i class="right fas fa-angle-left"></i>-->
<!--        </p>-->
<!--    </a>-->
<!--    <ul class="nav nav-treeview">-->
<!--        <li class="nav-item">-->
<!--            <a href="{{ URL('admin/sectionone') }}" class="nav-link active">-->
<!--                <i class="far fa-circle nav-icon"></i>-->
<!--                <p> مشاهدة </p>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
{{--  SectionTwo  --}}
<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            القسم الثاني بالصفحة
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/sectiontwo') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> مشاهدة </p>
            </a>
        </li>
    </ul>
</li>
{{--  SectionThree --}}
<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            القسم الثالث بالصفحة
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/sectionthree') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> مشاهدة </p>
            </a>
        </li>
    </ul>
</li>

{{--  Logo --}}
<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            صور الشركات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/logo') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> صور الشركات </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logo.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>

                    اضافه
                </p>

            </a>
        </li>

    </ul>
</li>

{{--  question --}}

{{--  PDF --}}
<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            الملفات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/pdf') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> الملف </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pdf.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    ملف اضافه
                </p>
            </a>
        </li>

    </ul>
</li>
 



<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-gear"></i>                
        <p>
            صفحه الاعدادات
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item ">
    <a href="{{ route('user.index') }}" class="nav-link active">
        <i class="fa-solid fa-gear"></i>                <p>
           صفحه بيانات الادمن
         </p>
    </a>

</li>
        <li class="nav-item">
            <a href="{{ route('email.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>  اميل الدعم


                </p>

            </a>
        </li>

    </ul>
</li>



<!----------------------------------------------->




<li class="nav-item">
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-folder-open"></i>
        <p>
            الاعضاء
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('user_serach') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> كل باحثي العمل  </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user_vistore') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>  كل الزوار  


                </p>

            </a>
        </li>

    </ul>
</li>
<li class="nav-item" >
    <a href="#" class="nav-link bg-primary">
        <i class="fa-solid fa-gear"></i>                
        <p>
            اعدادات الموقع
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ URL('admin/setting') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p> الاعدات </p>
            </a>
        </li>
        

    </ul>
</li>

