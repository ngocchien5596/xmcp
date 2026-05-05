# Plan: Dọn dẹp & Tái cấu trúc thư mục (Cleanup Next.js -> Laravel)

Dự án hiện tại đang có cấu trúc lẫn lộn giữa thư mục gốc chứa mã nguồn Next.js cũ và thư mục `laravel-app` chứa mã nguồn Laravel mới vừa được cài đặt. Để đáp ứng yêu cầu chuyển đổi 100% sang Laravel và dọn dẹp sạch sẽ, chúng ta sẽ thực hiện theo kế hoạch sau:

## 1. File/Thư mục sẽ GIỮ (và di chuyển ra root)
Toàn bộ mã nguồn Laravel hiện đang nằm trong thư mục `laravel-app/` sẽ được giữ lại nguyên vẹn và di chuyển ra thư mục gốc (`g:\Source-code\website-congty\`).
- `app/`, `bootstrap/`, `config/`, `database/`
- `public/` (Của Laravel), `resources/`, `routes/`, `storage/`, `vendor/`
- `artisan`, `composer.json`, `composer.lock`
- `.env`, `.editorconfig`, `.gitattributes`, `.gitignore`
- `package.json`, `package-lock.json`, `vite.config.js`, `tailwind.config.js`, `postcss.config.js`

## 2. File/Thư mục sẽ XÓA
Tất cả các file thuộc về Next.js/React nằm ở thư mục gốc và thư mục nháp sẽ bị xóa hoàn toàn do không còn được sử dụng.
- `src/` (Chứa app, components, data của Next.js)
- `.next/` (Build cache của Next.js)
- `public/` (Của Next.js cũ - chỉ chứa các icon mặc định `next.svg`, `vercel.svg`...)
- `node_modules/` (Của Next.js cũ ở thư mục gốc)
- `next.config.ts`, `next-env.d.ts`
- `tsconfig.json`, `tsconfig.tsbuildinfo`
- `eslint.config.mjs`, `postcss.config.mjs`
- `package.json`, `package-lock.json` (Của Next.js ở thư mục gốc)
- Thư mục nháp `laravel/` (thư mục này được tạo tạm thời để code trước khi khởi tạo `laravel-app`, hiện tại đã copy toàn bộ vào `laravel-app`).

## 3. Các bước thực hiện (Action Plan)

1. **Xóa thư mục nháp:** Xóa thư mục `laravel/` không còn dùng đến.
2. **Xóa mã nguồn Next.js:** Xóa toàn bộ danh sách các file/thư mục thuộc phần "SẼ XÓA" ở thư mục gốc.
3. **Di chuyển Laravel ra ngoài:** Di chuyển toàn bộ nội dung bên trong thư mục `laravel-app/` ra ngoài thư mục gốc `g:\Source-code\website-congty\`.
4. **Xóa thư mục rỗng:** Xóa thư mục `laravel-app/` sau khi đã chuyển hết file.
5. **Cài đặt & Build:**
   - Chạy `npm install` tại thư mục gốc.
   - Chạy `npm run build` để compile lại assets.
6. **Kiểm tra hệ thống:**
   - Chạy `php artisan route:list`
   - Chạy `php artisan config:clear`, `php artisan cache:clear`, `php artisan view:clear`
   - Mở server `php artisan serve` và kiểm tra lại toàn bộ URL.
