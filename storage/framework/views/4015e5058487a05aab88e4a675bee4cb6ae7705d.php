<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <h3 class="text-gray-700 text-3xl font-medium">Welcome : <?php echo e(auth()->user()->name); ?></h3>
                  <div class="bg-white shadow-md rounded my-6 p-5">
                        <form method="POST" action="<?php echo e(route('admin.profile.update')); ?>" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('put'); ?>
                          <div class="flex flex-col space-y-2">
                            <label for="name" class="text-gray-700 select-none font-medium">User Name</label>
                            <input id="name" type="text" name="name" value="<?php echo e(old('name',$user->name)); ?>"
                              placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            />
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                            <input id="email" type="text" name="email" value="<?php echo e(old('email',$user->email)); ?>"
                              placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            />
                        </div>

                        <div class="flex text-gray-500 mt-5">
                            <div class="bg-white rounded-lg">
                              <div class="" x-data="imageData()">
                                <div x-show="previewUrl == '' && imgurl == ''">
                                  <p class="text-center uppercase text-bold">
                                    <label for="thumbnailprev" class="cursor-pointer">
                                      Upload a file
                                    </label>
                                    <input type="file" name="profile" id="thumbnailprev"
                                        class="hidden thumbnailprev" @change="updatePreview()">
                                  </p>
                                </div>
                                <div x-show="previewUrl !== ''" class="relative w-24 h-24">
                                  <img :src="previewUrl" alt="" class="shadow-lg rounded-full max-w-full h-auto align-middle border-none h-full w-full object-cover">
                                  <div class="ml-5">
                                    <button type="button" class="" @click="clearPreview()">change</button>
                                  </div>
                                </div>

                                <div x-show="imgurl !== ''" class="relative w-24 h-24">
                                  <img :src="imgurl" alt="" class="shadow-lg rounded-full max-w-full h-auto align-middle border-none h-full w-full object-cover">
                                  <div class="ml-5">
                                    <button type="button" class="" @click="clearPreview()">change</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                        </div>

                        <div class="text-center mt-16 mb-16">
                          <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Update</button>
                        </div>
                  </div>
            </div>
        </main>
    </div>
</div>


<script>
    function imageData() {
        var files = document.getElementById("thumbnailprev").files;
        if(files.length == 0){
            var url = '/images/'+<?php echo json_encode($user->profile); ?>;
        }else{
            url = '';
        }
      return {
        previewUrl: "",
        imgurl: url,
        updatePreview() {
          var reader, files = document.getElementById("thumbnailprev").files;
          reader = new FileReader();
          reader.onload = e => {
            this.previewUrl = e.target.result;
          };
          reader.readAsDataURL(files[0]);
        },
        clearPreview() {
          document.getElementById("thumbnailprev").value = null;
          this.previewUrl = "";
          this.imgurl     = "";
        }
      };
    }

</script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\interview\laravel-starter\resources\views/setting/profile.blade.php ENDPATH**/ ?>