<?php
/**
 * Template Name: Chính sách Đổi trả Khải Hoàn Derma
 * 
 * Description: Page template designed for Return and Refund Policy page. 
 * Optimized for SEO, E-E-A-T guidelines, and responsive mobile-first display.
 * 
 * @package Flatsome
 */

get_header();
?>

<div id="content" class="content-area page-wrapper" role="main">
    <div class="khd-refund-policy-container">
        <div class="khd-refund-wrapper">
            
            <!-- Breadcrumbs chuẩn SEO cho trải nghiệm người dùng -->
            <nav class="khd-breadcrumbs" aria-label="Breadcrumb">
                <ol>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a></li>
                    <li><span class="separator">/</span></li>
                    <li aria-current="page">Chính sách đổi trả & hoàn tiền</li>
                </ol>
            </nav>

            <!-- Banner tiêu đề hiện đại -->
            <header class="khd-refund-banner">
                <h1>Chính Sách Đổi Trả & Hoàn Tiền</h1>
                <p>Khải Hoàn Derma cam kết bảo vệ quyền lợi tối đa cho khách hàng và cung cấp trải nghiệm mua sắm mỹ phẩm y khoa an tâm, tin cậy nhất.</p>
            </header>

            <!-- Tóm tắt nhanh (Quick Actions / Highlights) giúp giữ chân người dùng và giảm bounce rate -->
            <section class="khd-quick-summary">
                <h3 class="khd-summary-title">Tóm tắt nhanh chính sách</h3>
                <div class="khd-summary-grid">
                    <div class="khd-summary-item">
                        <h4>Thời gian đổi trả</h4>
                        <p>Lên đến <strong>07 ngày</strong> kể từ khi nhận hàng thành công.</p>
                    </div>
                    <div class="khd-summary-item">
                        <h4>Bảo hành kích ứng</h4>
                        <p>Hỗ trợ đổi trả <strong>100%</strong> nếu bị kích ứng da do sản phẩm.</p>
                    </div>
                    <div class="khd-summary-item">
                        <h4>Thời gian hoàn tiền</h4>
                        <p>Từ <strong>3 - 5 ngày làm việc</strong> sau khi nhận lại hàng.</p>
                    </div>
                </div>
            </section>

            <!-- Nội dung chính sách chi tiết chia thành các Card trực quan -->
            
            <!-- 1. Các trường hợp chấp nhận đổi trả -->
            <article class="khd-section-card">
                <h2>1. Các trường hợp áp dụng đổi trả hàng</h2>
                <p>Khải Hoàn Derma luôn sẵn sàng hỗ trợ khách hàng đổi mới sản phẩm hoặc hoàn tiền trong các trường hợp sau đây:</p>
                
                <ul class="khd-list">
                    <li><strong>Sản phẩm phát sinh lỗi từ nhà sản xuất:</strong> Sản phẩm bị lỗi vòi xịt, nắp đậy bị nứt vỡ, chất kem/dung dịch bên trong bị tách lớp, biến màu hoặc có mùi lạ trước khi bóc seal mở hộp.</li>
                    <li><strong>Sản phẩm bị hư hỏng do vận chuyển:</strong> Vỏ hộp bị móp méo nặng, vỡ chai/lọ, rò rỉ dung dịch mỹ phẩm ra ngoài do quá trình đóng gói hoặc vận chuyển.</li>
                    <li><strong>Giao sai hoặc thiếu sản phẩm:</strong> Sản phẩm thực nhận không đúng với đơn đặt hàng về chủng loại, dung tích, mẫu mã hoặc thiếu các quà tặng kèm theo chương trình khuyến mãi.</li>
                    <li><strong>Sản phẩm cận date (hạn sử dụng ngắn):</strong> Hạn sử dụng của sản phẩm dưới 06 tháng tính từ thời điểm nhận hàng (ngoại trừ các sản phẩm đã được thanh lý/giảm giá sâu có thông báo trước về hạn dùng).</li>
                </ul>

                <!-- Hộp cảnh báo đặc biệt về trường hợp dị ứng/kích ứng da - Rất quan trọng đối với ngành mỹ phẩm -->
                <div class="khd-allergy-alert">
                    <div class="khd-allergy-icon">🩺</div>
                    <div class="khd-allergy-content">
                        <h4>Đặc quyền: Bảo hành kích ứng da</h4>
                        <p>Đối với mỹ phẩm y khoa, Khải Hoàn Derma hiểu rằng mỗi làn da có một phản ứng khác nhau. Chúng tôi <strong>hỗ trợ đổi trả hoặc hoàn tiền 100%</strong> nếu khách hàng bị mẩn đỏ, ngứa rát, nổi mụn nước do kích ứng với sản phẩm trong vòng <strong>03 ngày</strong> sử dụng đầu tiên. Quý khách vui lòng cung cấp hình ảnh/video vùng da kích ứng và chỉ định từ bác sĩ da liễu (hoặc sự xác nhận từ đội ngũ chuyên viên y khoa của shop) để được hỗ trợ nhanh nhất.</p>
                    </div>
                </div>
            </article>

            <!-- 2. Điều kiện đổi trả hàng -->
            <article class="khd-section-card">
                <h2>2. Điều kiện sản phẩm đổi trả</h2>
                <p>Để đảm bảo quá trình đổi trả hàng diễn ra thuận lợi và nhanh chóng, sản phẩm hoàn trả cần đáp ứng các tiêu chuẩn sau:</p>
                
                <ul class="khd-list">
                    <li>Sản phẩm phải còn nguyên nhãn mác, tem niêm phong (seal), tem chống hàng giả (nếu có) và chưa qua sử dụng (ngoại trừ trường hợp đổi trả do kích ứng da).</li>
                    <li>Bao bì, hộp giấy đi kèm sản phẩm phải còn nguyên vẹn, không bị rách nát, tẩy xóa chữ vẽ lên vỏ hộp.</li>
                    <li>Có hóa đơn mua hàng (hoá đơn giấy hoặc hoá đơn điện tử gửi qua SMS/Zalo) hoặc số điện thoại đăng ký mua hàng khớp với dữ liệu trên hệ thống của Khải Hoàn Derma.</li>
                    <li>Có đầy đủ các phần quà đi kèm (nếu có). Trường hợp quà đi kèm đã qua sử dụng, Khải Hoàn Derma sẽ khấu trừ giá trị quà tặng vào số tiền hoàn trả.</li>
                </ul>
            </article>

            <!-- 3. Chính sách hoàn tiền & Chi phí vận chuyển -->
            <article class="khd-section-card">
                <h2>3. Chính sách hoàn tiền & Chi phí vận chuyển</h2>
                
                <h3>3.1. Phương thức & Thời gian hoàn tiền</h3>
                <p>Sau khi nhận được sản phẩm hoàn trả từ quý khách, bộ phận kỹ thuật của Khải Hoàn Derma sẽ tiến hành kiểm tra tình trạng hàng hóa trong vòng 24 - 48 giờ làm việc. Nếu sản phẩm đủ điều kiện hoàn trả:</p>
                <ul class="khd-list">
                    <li><strong>Hình thức hoàn tiền:</strong> Chuyển khoản trực tiếp vào tài khoản ngân hàng do khách hàng cung cấp.</li>
                    <li><strong>Thời gian xử lý:</strong> Từ <strong>03 đến 05 ngày làm việc</strong> (không tính Thứ Bảy, Chủ Nhật và ngày Lễ Tết).</li>
                </ul>

                <h3>3.2. Quy định về chi phí vận chuyển đổi trả</h3>
                <div class="khd-table-wrapper">
                    <table class="khd-table">
                        <thead>
                            <tr>
                                <th>Trường hợp đổi trả</th>
                                <th>Chi phí vận chuyển</th>
                                <th>Bên chịu trách nhiệm thanh toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lỗi do nhà sản xuất / vận chuyển / giao sai sản phẩm</td>
                                <td><strong>Miễn phí 100%</strong></td>
                                <td>Khải Hoàn Derma chịu toàn bộ phí ship 2 chiều.</td>
                            </tr>
                            <tr>
                                <td>Đổi trả theo nhu cầu cá nhân (chưa mở nắp/seal)</td>
                                <td>Phí ship 2 chiều</td>
                                <td>Khách hàng tự thanh toán cho đơn vị vận chuyển.</td>
                            </tr>
                            <tr>
                                <td>Đổi trả do kích ứng da (trong vòng 3 ngày)</td>
                                <td><strong>Miễn phí 100%</strong></td>
                                <td>Khải Hoàn Derma hỗ trợ chi trả phí ship 2 chiều.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <!-- 4. Quy trình đổi trả nhanh chóng -->
            <article class="khd-section-card">
                <h2>4. Quy trình đổi trả 4 bước nhanh chóng</h2>
                <p>Khải Hoàn Derma tối giản hóa quy trình đổi trả hàng để quý khách không mất nhiều thời gian chờ đợi:</p>
                
                <div class="khd-steps">
                    <div class="khd-step">
                        <div class="khd-step-num">1</div>
                        <h4>Liên hệ hỗ trợ</h4>
                        <p>Gọi điện tới Hotline <strong>0969.873.873</strong> hoặc nhắn tin qua Zalo của Khải Hoàn Derma để thông báo.</p>
                    </div>
                    <div class="khd-step">
                        <div class="khd-step-num">2</div>
                        <h4>Gửi minh chứng</h4>
                        <p>Cung cấp video khui hàng (unboxing), ảnh chụp lỗi sản phẩm hoặc hình ảnh da bị kích ứng để CSKH xác nhận.</p>
                    </div>
                    <div class="khd-step">
                        <div class="khd-step-num">3</div>
                        <h4>Gửi hàng về shop</h4>
                        <p>Đóng gói cẩn thận sản phẩm kèm hóa đơn và gửi về địa chỉ Showroom của Khải Hoàn Derma theo hướng dẫn.</p>
                    </div>
                    <div class="khd-step">
                        <div class="khd-step-num">4</div>
                        <h4>Nhận kết quả</h4>
                        <p>Khải Hoàn Derma kiểm tra sản phẩm và tiến hành gửi hàng thay thế mới hoặc chuyển khoản hoàn tiền cho bạn.</p>
                    </div>
                </div>
            </article>

            <!-- 5. FAQ - Câu hỏi thường gặp -->
            <article class="khd-section-card">
                <h2>5. Câu hỏi thường gặp về đổi trả mỹ phẩm (FAQs)</h2>
                
                <details class="khd-faq-item">
                    <summary>Tôi mua mỹ phẩm nhưng không hợp tông màu/mùi hương thì có được đổi không?</summary>
                    <p>Khải Hoàn Derma hỗ trợ đổi sản phẩm khác sang tông màu/mùi hương phù hợp hơn trong vòng 7 ngày với điều kiện sản phẩm <strong>chưa bóc seal niêm phong, chưa qua sử dụng</strong> và vỏ hộp còn nguyên vẹn. Khách hàng sẽ chịu chi phí vận chuyển phát sinh cho lần đổi trả này.</p>
                </details>

                <details class="khd-faq-item">
                    <summary>Khi gửi hàng đổi trả về shop, tôi cần đóng gói như thế nào?</summary>
                    <p>Để tránh sản phẩm bị nứt vỡ thêm trong quá trình vận chuyển ngược lại, bạn vui lòng chèn thêm mút xốp hoặc túi bóng khí xốp nổ xung quanh sản phẩm và đóng trong hộp giấy carton cứng, dán băng dính chắc chắn bên ngoài trước khi bàn giao cho đơn vị chuyển phát.</p>
                </details>

                <details class="khd-faq-item">
                    <summary>Nếu tôi làm mất hóa đơn giấy thì có được đổi trả không?</summary>
                    <p>Hoàn toàn ĐƯỢC. Khải Hoàn Derma quản lý đơn hàng bằng hệ thống điện tử. Bạn chỉ cần cung cấp số điện thoại đã sử dụng để mua hàng, bộ phận CSKH sẽ tự động tra cứu lịch sử mua hàng để hỗ trợ giải quyết đổi trả cho bạn.</p>
                </details>

                <details class="khd-faq-item">
                    <summary>Tại sao tôi được khuyên nên quay video khi mở hộp (unboxing)?</summary>
                    <p>Video unboxing là bằng chứng xác thực nhất giúp bảo vệ quyền lợi của bạn khi xảy ra tranh chấp với bên vận chuyển (mất hàng, tráo hàng, bể vỡ trong hộp...). Có video khui hàng rõ nét sẽ giúp Khải Hoàn Derma duyệt yêu cầu đổi mới/hoần tiền ngay lập tức mà không cần chờ thời gian đối soát lâu với bưu cục.</p>
                </details>
            </article>

            <!-- Footer thông tin liên hệ chân trang -->
            <footer class="khd-policy-footer">
                <p>Mọi thắc mắc hoặc cần hỗ trợ gấp về chính sách đổi trả, quý khách vui lòng liên hệ:</p>
                <div class="khd-contact-info">
                    <span class="khd-contact-badge">📞 Hotline: <strong>0969.873.873</strong></span>
                    <span class="khd-contact-badge">💬 Zalo: <strong>Khải Hoàn Derma</strong></span>
                    <span class="khd-contact-badge">✉️ Email: <strong>hotro@khaihoanderma.com</strong></span>
                </div>
            </footer>

        </div>
    </div>
</div>

<!-- ==========================================
     CSS TÙY CHỈNH PREMIUM CHO TRANG ĐỔI TRẢ
     ========================================== -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

.khd-refund-policy-container {
    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    color: #1e293b;
    line-height: 1.75;
    background-color: #f8fafc;
    padding: 30px 0 70px 0;
}

.khd-refund-wrapper {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Breadcrumbs Styling */
.khd-breadcrumbs {
    margin-bottom: 25px;
}
.khd-breadcrumbs ol {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    font-size: 0.85rem;
}
.khd-breadcrumbs li {
    display: flex;
    align-items: center;
}
.khd-breadcrumbs a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.2s ease;
}
.khd-breadcrumbs a:hover {
    color: #db5a6b;
}
.khd-breadcrumbs .separator {
    margin: 0 10px;
    color: #cbd5e1;
}
.khd-breadcrumbs li[aria-current="page"] {
    color: #94a3b8;
    font-weight: 500;
}

/* Banner */
.khd-refund-banner {
    background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 100%);
    border-radius: 24px;
    padding: 60px 40px;
    text-align: center;
    margin-bottom: 35px;
    box-shadow: 0 10px 30px rgba(219, 90, 107, 0.04);
    border: 1px solid rgba(219, 90, 107, 0.1);
}

.khd-refund-banner h1 {
    font-size: 2.5rem;
    font-weight: 800;
    color: #db5a6b;
    margin: 0 0 15px 0;
    line-height: 1.25;
}

.khd-refund-banner p {
    font-size: 1.1rem;
    color: #475569;
    max-width: 680px;
    margin: 0 auto;
}

/* Quick Summary */
.khd-quick-summary {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    margin-bottom: 35px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.015);
    border: 1px solid #f1f5f9;
}

.khd-summary-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 20px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.khd-summary-title::before {
    content: "⚡";
    font-size: 1.3rem;
}

.khd-summary-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
}

.khd-summary-item {
    background: #fff5f5;
    border-left: 4px solid #db5a6b;
    padding: 18px 20px;
    border-radius: 0 16px 16px 0;
}

.khd-summary-item h4 {
    font-size: 0.9rem;
    font-weight: 700;
    color: #db5a6b;
    margin: 0 0 6px 0;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.khd-summary-item p {
    margin: 0;
    font-size: 0.95rem;
    color: #334155;
    line-height: 1.5;
}

/* Section Card */
.khd-section-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.015);
    border: 1px solid #f1f5f9;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
}

.khd-section-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.03);
}

.khd-section-card h2 {
    font-size: 1.55rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 22px 0;
    padding-bottom: 12px;
    border-bottom: 2px solid #f8fafc;
    position: relative;
}

.khd-section-card h2::after {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 70px;
    height: 2px;
    background-color: #db5a6b;
}

.khd-section-card h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e293b;
    margin: 30px 0 15px 0;
}

.khd-section-card p {
    color: #475569;
    margin: 0 0 20px 0;
}

/* Custom Check List */
.khd-list {
    list-style: none;
    padding-left: 0;
    margin: 0 0 20px 0;
}

.khd-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 14px;
    color: #475569;
}

.khd-list li::before {
    content: "✓";
    position: absolute;
    left: 4px;
    top: 2px;
    color: #db5a6b;
    font-weight: 900;
    font-size: 1.1rem;
}

.khd-list li strong {
    color: #0f172a;
}

/* Allergy Alert Panel */
.khd-allergy-alert {
    background: #fffbeb;
    border: 1px solid #fef3c7;
    border-radius: 16px;
    padding: 24px;
    margin: 25px 0 10px 0;
    display: flex;
    gap: 16px;
}

.khd-allergy-icon {
    font-size: 2rem;
    line-height: 1.2;
}

.khd-allergy-content h4 {
    margin: 0 0 6px 0;
    color: #b45309;
    font-size: 1.05rem;
    font-weight: 700;
}

.khd-allergy-content p {
    margin: 0;
    font-size: 0.92rem;
    color: #78350f;
    line-height: 1.65;
}

/* Table Style */
.khd-table-wrapper {
    overflow-x: auto;
    margin: 25px 0 15px 0;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
}

.khd-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
    font-size: 0.95rem;
}

.khd-table th, .khd-table td {
    padding: 14px 18px;
    text-align: left;
    border-bottom: 1px solid #e2e8f0;
}

.khd-table th {
    background-color: #f8fafc;
    color: #334155;
    font-weight: 700;
}

.khd-table tbody tr:last-child td {
    border-bottom: none;
}

.khd-table td strong {
    color: #db5a6b;
}

/* 4 Steps Timeline */
.khd-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.khd-step {
    text-align: center;
    background: #fffcfc;
    padding: 30px 20px;
    border-radius: 16px;
    border: 1px dashed rgba(219, 90, 107, 0.25);
    transition: all 0.3s ease;
}

.khd-step:hover {
    border-color: #db5a6b;
    background-color: #fffafb;
    transform: translateY(-2px);
}

.khd-step-num {
    background: #db5a6b;
    color: #ffffff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.1rem;
    margin: 0 auto 18px auto;
    box-shadow: 0 4px 10px rgba(219, 90, 107, 0.25);
}

.khd-step h4 {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 8px 0;
}

.khd-step p {
    font-size: 0.88rem;
    color: #64748b;
    margin: 0;
    line-height: 1.6;
}

/* FAQs Accordion Details */
.khd-faq-item {
    border-bottom: 1px solid #f1f5f9;
    padding: 18px 0;
}

.khd-faq-item:first-of-type {
    padding-top: 5px;
}

.khd-faq-item:last-child {
    border-bottom: none;
    padding-bottom: 5px;
}

.khd-faq-item summary {
    font-size: 1.05rem;
    font-weight: 600;
    color: #1e293b;
    cursor: pointer;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 6px 0;
    user-select: none;
}

.khd-faq-item summary::-webkit-details-marker {
    display: none;
}

.khd-faq-item summary::after {
    content: "+";
    font-size: 1.5rem;
    color: #db5a6b;
    font-weight: 500;
    transition: transform 0.25s ease;
}

.khd-faq-item[open] summary::after {
    content: "−";
    transform: rotate(90deg);
}

.khd-faq-item p {
    margin-top: 12px;
    margin-bottom: 0;
    color: #475569;
    font-size: 0.95rem;
    padding-left: 4px;
    line-height: 1.7;
}

/* Policy Footer & Badges */
.khd-policy-footer {
    text-align: center;
    padding-top: 20px;
}

.khd-policy-footer p {
    color: #64748b;
    font-size: 1rem;
    margin-bottom: 25px;
}

.khd-contact-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}

.khd-contact-badge {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 50px;
    padding: 10px 24px;
    font-size: 0.92rem;
    color: #475569;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.01);
    transition: all 0.2s ease;
}

.khd-contact-badge:hover {
    border-color: #db5a6b;
    color: #db5a6b;
    transform: translateY(-1px);
}

.khd-contact-badge strong {
    color: #0f172a;
}
.khd-contact-badge:hover strong {
    color: #db5a6b;
}

/* ==========================================
     RESPONSIVE QUERIES
     ========================================== */
@media (max-width: 768px) {
    .khd-refund-policy-container {
        padding: 20px 0 50px 0;
    }
    .khd-refund-banner {
        padding: 40px 20px;
        border-radius: 16px;
        margin-bottom: 25px;
    }
    .khd-refund-banner h1 {
        font-size: 1.85rem;
    }
    .khd-refund-banner p {
        font-size: 0.98rem;
    }
    .khd-quick-summary {
        padding: 20px;
        margin-bottom: 25px;
    }
    .khd-summary-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }
    .khd-section-card {
        padding: 25px 20px;
        border-radius: 16px;
        margin-bottom: 20px;
    }
    .khd-section-card h2 {
        font-size: 1.35rem;
    }
    .khd-steps {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    .khd-step {
        padding: 25px 15px;
    }
    .khd-allergy-alert {
        flex-direction: column;
        gap: 10px;
        padding: 18px;
    }
    .khd-allergy-icon {
        font-size: 1.8rem;
    }
    .khd-contact-info {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }
    .khd-contact-badge {
        padding: 12px 20px;
    }
}
</style>

<!-- ========================================================
     SCHEMA JSON-LD FAQ STRUCTURAL DATA (TỐI ƯU HIỂN THỊ GOOGLE)
     ======================================================== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Tôi bị kích ứng khi sử dụng sản phẩm thì có được đổi trả hàng hay hoàn tiền không?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Có. Khải Hoàn Derma áp dụng chính sách bảo hành đặc biệt đối với kích ứng da. Nếu bạn bị mẩn đỏ, ngứa rát, hoặc nổi mụn do không tương thích với mỹ phẩm mua tại shop trong vòng 03 ngày sử dụng đầu tiên, Khải Hoàn Derma cam kết đổi sản phẩm khác hoặc hoàn tiền 100% miễn phí. Quý khách vui lòng cung cấp hình ảnh da kích ứng và liên hệ hotline 0969.873.873 để được hỗ trợ nhanh chóng."
      }
    },
    {
      "@type": "Question",
      "name": "Thời gian được phép gửi yêu cầu đổi trả sản phẩm tại Khải Hoàn Derma là bao lâu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Quý khách có quyền yêu cầu đổi hàng hoặc hoàn trả tiền trong vòng tối đa 07 ngày kể từ ngày nhận hàng thành công từ đơn vị vận chuyển."
      }
    },
    {
      "@type": "Question",
      "name": "Tôi phải chịu phí ship bao nhiêu tiền khi thực hiện gửi sản phẩm đổi trả?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nếu sản phẩm bị lỗi từ nhà sản xuất, bể vỡ do vận chuyển, giao sai sản phẩm, giao thiếu quà tặng hoặc sản phẩm cận date, Khải Hoàn Derma miễn phí 100% phí ship 2 chiều. Nếu đổi trả theo nhu cầu cá nhân (sản phẩm chưa bóc seal), khách hàng sẽ tự chịu chi phí vận chuyển."
      }
    },
    {
      "@type": "Question",
      "name": "Tôi sẽ nhận lại tiền hoàn trả qua hình thức nào và trong thời gian bao lâu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Khải Hoàn Derma sẽ hoàn trả tiền cho khách hàng bằng hình thức chuyển khoản ngân hàng trong vòng từ 03 đến 05 ngày làm việc, tính từ thời điểm chúng tôi nhận lại được sản phẩm hoàn trả và xác nhận hàng hóa đáp ứng đủ điều kiện quy định."
      }
    }
  ]
}
</script>

<?php
get_footer();
