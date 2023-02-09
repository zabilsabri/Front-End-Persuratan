@extends('admin.layouts.app', ['title' => 'Data Lurah/Kasi'])
<link rel="stylesheet" href="{{ asset('style/css/verifikasiUser.css')}}">

@section('content')
    <div class="hal-head">
        <h1>Data Warga</h1>
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-left: 30px;margin-right: 30px;border-bottom-width: 0px;">
            <button class="nav-link active" id="nav-lurah-tab" data-bs-toggle="tab" data-bs-target="#nav-lurah" type="button" role="tab" aria-controls="nav-lurah" aria-selected="true">Lurah</button>
            <button class="nav-link" id="nav-kasi-tab" data-bs-toggle="tab" data-bs-target="#nav-kasi" type="button" role="tab" aria-controls="nav-kasi" aria-selected="false">Kasi</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-lurah" role="tabpanel" aria-labelledby="nav-lurah-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body">
                <div class="row ps-4 pe-4" style="flex-direction: row-reverse">
                    
                <div class="col-sm-2">
                    <div class="mt-3">
                        <div id="table-1_filter" class="dataTables_filter">
                            <label>Cari:
                                <input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="table-1">
                            </label>
                        </div>
                    </div>
                </div>

                </div>
            
                <div class="row">
                    <div class="user-box col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                    <svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <ellipse cx="33.25" cy="30.3689" rx="33.25" ry="30.3689" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.75 61.9632C53.2769 61.9632 66.675 49.7261 66.675 34.6312C66.675 19.5364 53.2769 7.29933 36.75 7.29933C20.2231 7.29933 6.825 19.5364 6.825 34.6312C6.825 49.7261 20.2231 61.9632 36.75 61.9632ZM36.75 65C55.114 65 70 51.4039 70 34.6312C70 17.8586 55.114 4.26245 36.75 4.26245C18.386 4.26245 3.5 17.8586 3.5 34.6312C3.5 51.4039 18.386 65 36.75 65Z" fill="#4FB96E"/>
                                        <path d="M16.7998 52.2904C16.7998 50.7218 18.0833 49.3962 19.7923 49.2231C32.6185 47.9264 40.9393 48.0433 53.7372 49.252C54.3763 49.3133 54.982 49.5432 55.4804 49.9138C55.9787 50.2843 56.3481 50.7794 56.5435 51.3385C56.7389 51.8976 56.7517 52.4966 56.5805 53.0623C56.4093 53.628 56.0614 54.1359 55.5793 54.524C40.4755 66.5485 31.8438 66.383 17.8638 54.5362C17.1822 53.9592 16.7998 53.1392 16.7998 52.2919V52.2904Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5664 50.7615C40.8699 49.5619 32.6688 49.4495 19.9739 50.7326C19.556 50.7771 19.1708 50.9608 18.892 51.2485C18.6131 51.5363 18.4603 51.9078 18.4627 52.2921C18.4627 52.7263 18.6605 53.1378 18.9947 53.4233C25.924 59.2936 31.1742 61.9463 36.3063 61.963C41.4568 61.9797 46.9896 59.3482 54.4874 53.3808C54.7256 53.1871 54.8971 52.9345 54.981 52.6535C55.0649 52.3725 55.0577 52.0753 54.9601 51.798C54.8626 51.5207 54.6789 51.2753 54.4315 51.0915C54.1841 50.9078 53.8835 50.7937 53.5664 50.763V50.7615ZM19.6098 47.714C32.5707 46.4036 41.0129 46.522 53.9105 47.7413C54.872 47.833 55.7833 48.1787 56.5329 48.7361C57.2825 49.2935 57.8379 50.0384 58.1312 50.8797C58.4244 51.721 58.4427 52.6221 58.1838 53.4728C57.9249 54.3234 57.4001 55.0867 56.6736 55.6691C49.0677 61.7246 42.7336 65.0227 36.2963 64.9999C29.8409 64.9786 23.786 61.6244 16.7354 55.6493C16.2306 55.2199 15.8281 54.6999 15.5532 54.122C15.2783 53.5441 15.1369 52.9206 15.1377 52.2905C15.1353 51.1584 15.5902 50.0653 16.4154 49.2206C17.2406 48.3758 18.3781 47.8388 19.6098 47.7124V47.714Z" fill="#4FB96E"/>
                                        <path d="M50.0502 28.5574C50.0502 31.7792 48.649 34.8689 46.1547 37.147C43.6605 39.4251 40.2776 40.705 36.7502 40.705C33.2228 40.705 29.8399 39.4251 27.3457 37.147C24.8514 34.8689 23.4502 31.7792 23.4502 28.5574C23.4502 25.3357 24.8514 22.2459 27.3457 19.9678C29.8399 17.6897 33.2228 16.4099 36.7502 16.4099C40.2776 16.4099 43.6605 17.6897 46.1547 19.9678C48.649 22.2459 50.0502 25.3357 50.0502 28.5574Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.7502 37.6681C39.3957 37.6681 41.9329 36.7082 43.8036 34.9996C45.6743 33.2911 46.7252 30.9737 46.7252 28.5574C46.7252 26.1411 45.6743 23.8238 43.8036 22.1152C41.9329 20.4067 39.3957 19.4468 36.7502 19.4468C34.1047 19.4468 31.5675 20.4067 29.6968 22.1152C27.8261 23.8238 26.7752 26.1411 26.7752 28.5574C26.7752 30.9737 27.8261 33.2911 29.6968 34.9996C31.5675 36.7082 34.1047 37.6681 36.7502 37.6681ZM36.7502 40.705C40.2776 40.705 43.6605 39.4251 46.1547 37.147C48.649 34.8689 50.0502 31.7792 50.0502 28.5574C50.0502 25.3357 48.649 22.2459 46.1547 19.9678C43.6605 17.6897 40.2776 16.4099 36.7502 16.4099C33.2228 16.4099 29.8399 17.6897 27.3457 19.9678C24.8514 22.2459 23.4502 25.3357 23.4502 28.5574C23.4502 31.7792 24.8514 34.8689 27.3457 37.147C29.8399 39.4251 33.2228 40.705 36.7502 40.705Z" fill="#4FB96E"/>
                                    </svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="nama-user"><a href="{{ route('detail-lurah-kasi') }}" class="text-black stretched-link">Nama Lurah</a></h6>
                                        </div>
                                        <h6 class="telpon-user-green">No. Induk Pegawai</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-box col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                    <svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <ellipse cx="33.25" cy="30.3689" rx="33.25" ry="30.3689" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.75 61.9632C53.2769 61.9632 66.675 49.7261 66.675 34.6312C66.675 19.5364 53.2769 7.29933 36.75 7.29933C20.2231 7.29933 6.825 19.5364 6.825 34.6312C6.825 49.7261 20.2231 61.9632 36.75 61.9632ZM36.75 65C55.114 65 70 51.4039 70 34.6312C70 17.8586 55.114 4.26245 36.75 4.26245C18.386 4.26245 3.5 17.8586 3.5 34.6312C3.5 51.4039 18.386 65 36.75 65Z" fill="#4FB96E"/>
                                        <path d="M16.7998 52.2904C16.7998 50.7218 18.0833 49.3962 19.7923 49.2231C32.6185 47.9264 40.9393 48.0433 53.7372 49.252C54.3763 49.3133 54.982 49.5432 55.4804 49.9138C55.9787 50.2843 56.3481 50.7794 56.5435 51.3385C56.7389 51.8976 56.7517 52.4966 56.5805 53.0623C56.4093 53.628 56.0614 54.1359 55.5793 54.524C40.4755 66.5485 31.8438 66.383 17.8638 54.5362C17.1822 53.9592 16.7998 53.1392 16.7998 52.2919V52.2904Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5664 50.7615C40.8699 49.5619 32.6688 49.4495 19.9739 50.7326C19.556 50.7771 19.1708 50.9608 18.892 51.2485C18.6131 51.5363 18.4603 51.9078 18.4627 52.2921C18.4627 52.7263 18.6605 53.1378 18.9947 53.4233C25.924 59.2936 31.1742 61.9463 36.3063 61.963C41.4568 61.9797 46.9896 59.3482 54.4874 53.3808C54.7256 53.1871 54.8971 52.9345 54.981 52.6535C55.0649 52.3725 55.0577 52.0753 54.9601 51.798C54.8626 51.5207 54.6789 51.2753 54.4315 51.0915C54.1841 50.9078 53.8835 50.7937 53.5664 50.763V50.7615ZM19.6098 47.714C32.5707 46.4036 41.0129 46.522 53.9105 47.7413C54.872 47.833 55.7833 48.1787 56.5329 48.7361C57.2825 49.2935 57.8379 50.0384 58.1312 50.8797C58.4244 51.721 58.4427 52.6221 58.1838 53.4728C57.9249 54.3234 57.4001 55.0867 56.6736 55.6691C49.0677 61.7246 42.7336 65.0227 36.2963 64.9999C29.8409 64.9786 23.786 61.6244 16.7354 55.6493C16.2306 55.2199 15.8281 54.6999 15.5532 54.122C15.2783 53.5441 15.1369 52.9206 15.1377 52.2905C15.1353 51.1584 15.5902 50.0653 16.4154 49.2206C17.2406 48.3758 18.3781 47.8388 19.6098 47.7124V47.714Z" fill="#4FB96E"/>
                                        <path d="M50.0502 28.5574C50.0502 31.7792 48.649 34.8689 46.1547 37.147C43.6605 39.4251 40.2776 40.705 36.7502 40.705C33.2228 40.705 29.8399 39.4251 27.3457 37.147C24.8514 34.8689 23.4502 31.7792 23.4502 28.5574C23.4502 25.3357 24.8514 22.2459 27.3457 19.9678C29.8399 17.6897 33.2228 16.4099 36.7502 16.4099C40.2776 16.4099 43.6605 17.6897 46.1547 19.9678C48.649 22.2459 50.0502 25.3357 50.0502 28.5574Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.7502 37.6681C39.3957 37.6681 41.9329 36.7082 43.8036 34.9996C45.6743 33.2911 46.7252 30.9737 46.7252 28.5574C46.7252 26.1411 45.6743 23.8238 43.8036 22.1152C41.9329 20.4067 39.3957 19.4468 36.7502 19.4468C34.1047 19.4468 31.5675 20.4067 29.6968 22.1152C27.8261 23.8238 26.7752 26.1411 26.7752 28.5574C26.7752 30.9737 27.8261 33.2911 29.6968 34.9996C31.5675 36.7082 34.1047 37.6681 36.7502 37.6681ZM36.7502 40.705C40.2776 40.705 43.6605 39.4251 46.1547 37.147C48.649 34.8689 50.0502 31.7792 50.0502 28.5574C50.0502 25.3357 48.649 22.2459 46.1547 19.9678C43.6605 17.6897 40.2776 16.4099 36.7502 16.4099C33.2228 16.4099 29.8399 17.6897 27.3457 19.9678C24.8514 22.2459 23.4502 25.3357 23.4502 28.5574C23.4502 31.7792 24.8514 34.8689 27.3457 37.147C29.8399 39.4251 33.2228 40.705 36.7502 40.705Z" fill="#4FB96E"/>
                                    </svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="nama-user"><a href="{{ route('detail-lurah-kasi') }}" class="text-black stretched-link">Nama Lurah</a></h6>
                                        </div>
                                        <h6 class="telpon-user-green">No. Induk Pegawai</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-kasi" role="tabpanel" aria-labelledby="nav-kasi-tab" tabindex="0" style="padding-top: 0px;">
        <div class="section-body" style="padding-top: 0px;">
            <div class="inner-section-body">
                <div class="row ps-4 pe-4" style="flex-direction: row-reverse">
                    
                <div class="col-sm-2">
                    <div class="mt-3">
                        <div id="table-1_filter" class="dataTables_filter">
                            <label>Cari:
                                <input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="table-1">
                            </label>
                        </div>
                    </div>
                </div>

                </div>
            
                <div class="row">
                    <div class="user-box col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                    <svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <ellipse cx="33.25" cy="30.3689" rx="33.25" ry="30.3689" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.75 61.9632C53.2769 61.9632 66.675 49.7261 66.675 34.6312C66.675 19.5364 53.2769 7.29933 36.75 7.29933C20.2231 7.29933 6.825 19.5364 6.825 34.6312C6.825 49.7261 20.2231 61.9632 36.75 61.9632ZM36.75 65C55.114 65 70 51.4039 70 34.6312C70 17.8586 55.114 4.26245 36.75 4.26245C18.386 4.26245 3.5 17.8586 3.5 34.6312C3.5 51.4039 18.386 65 36.75 65Z" fill="#4FB96E"/>
                                        <path d="M16.7998 52.2904C16.7998 50.7218 18.0833 49.3962 19.7923 49.2231C32.6185 47.9264 40.9393 48.0433 53.7372 49.252C54.3763 49.3133 54.982 49.5432 55.4804 49.9138C55.9787 50.2843 56.3481 50.7794 56.5435 51.3385C56.7389 51.8976 56.7517 52.4966 56.5805 53.0623C56.4093 53.628 56.0614 54.1359 55.5793 54.524C40.4755 66.5485 31.8438 66.383 17.8638 54.5362C17.1822 53.9592 16.7998 53.1392 16.7998 52.2919V52.2904Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5664 50.7615C40.8699 49.5619 32.6688 49.4495 19.9739 50.7326C19.556 50.7771 19.1708 50.9608 18.892 51.2485C18.6131 51.5363 18.4603 51.9078 18.4627 52.2921C18.4627 52.7263 18.6605 53.1378 18.9947 53.4233C25.924 59.2936 31.1742 61.9463 36.3063 61.963C41.4568 61.9797 46.9896 59.3482 54.4874 53.3808C54.7256 53.1871 54.8971 52.9345 54.981 52.6535C55.0649 52.3725 55.0577 52.0753 54.9601 51.798C54.8626 51.5207 54.6789 51.2753 54.4315 51.0915C54.1841 50.9078 53.8835 50.7937 53.5664 50.763V50.7615ZM19.6098 47.714C32.5707 46.4036 41.0129 46.522 53.9105 47.7413C54.872 47.833 55.7833 48.1787 56.5329 48.7361C57.2825 49.2935 57.8379 50.0384 58.1312 50.8797C58.4244 51.721 58.4427 52.6221 58.1838 53.4728C57.9249 54.3234 57.4001 55.0867 56.6736 55.6691C49.0677 61.7246 42.7336 65.0227 36.2963 64.9999C29.8409 64.9786 23.786 61.6244 16.7354 55.6493C16.2306 55.2199 15.8281 54.6999 15.5532 54.122C15.2783 53.5441 15.1369 52.9206 15.1377 52.2905C15.1353 51.1584 15.5902 50.0653 16.4154 49.2206C17.2406 48.3758 18.3781 47.8388 19.6098 47.7124V47.714Z" fill="#4FB96E"/>
                                        <path d="M50.0502 28.5574C50.0502 31.7792 48.649 34.8689 46.1547 37.147C43.6605 39.4251 40.2776 40.705 36.7502 40.705C33.2228 40.705 29.8399 39.4251 27.3457 37.147C24.8514 34.8689 23.4502 31.7792 23.4502 28.5574C23.4502 25.3357 24.8514 22.2459 27.3457 19.9678C29.8399 17.6897 33.2228 16.4099 36.7502 16.4099C40.2776 16.4099 43.6605 17.6897 46.1547 19.9678C48.649 22.2459 50.0502 25.3357 50.0502 28.5574Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.7502 37.6681C39.3957 37.6681 41.9329 36.7082 43.8036 34.9996C45.6743 33.2911 46.7252 30.9737 46.7252 28.5574C46.7252 26.1411 45.6743 23.8238 43.8036 22.1152C41.9329 20.4067 39.3957 19.4468 36.7502 19.4468C34.1047 19.4468 31.5675 20.4067 29.6968 22.1152C27.8261 23.8238 26.7752 26.1411 26.7752 28.5574C26.7752 30.9737 27.8261 33.2911 29.6968 34.9996C31.5675 36.7082 34.1047 37.6681 36.7502 37.6681ZM36.7502 40.705C40.2776 40.705 43.6605 39.4251 46.1547 37.147C48.649 34.8689 50.0502 31.7792 50.0502 28.5574C50.0502 25.3357 48.649 22.2459 46.1547 19.9678C43.6605 17.6897 40.2776 16.4099 36.7502 16.4099C33.2228 16.4099 29.8399 17.6897 27.3457 19.9678C24.8514 22.2459 23.4502 25.3357 23.4502 28.5574C23.4502 31.7792 24.8514 34.8689 27.3457 37.147C29.8399 39.4251 33.2228 40.705 36.7502 40.705Z" fill="#4FB96E"/>
                                    </svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="nama-user"><a href="{{ route('detail-lurah-kasi') }}" class="text-black stretched-link">Nama Kasi</a></h6>
                                        </div>
                                        <h6 class="telpon-user-green">No. Induk Pegawai</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-box col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                    <svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <ellipse cx="33.25" cy="30.3689" rx="33.25" ry="30.3689" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.75 61.9632C53.2769 61.9632 66.675 49.7261 66.675 34.6312C66.675 19.5364 53.2769 7.29933 36.75 7.29933C20.2231 7.29933 6.825 19.5364 6.825 34.6312C6.825 49.7261 20.2231 61.9632 36.75 61.9632ZM36.75 65C55.114 65 70 51.4039 70 34.6312C70 17.8586 55.114 4.26245 36.75 4.26245C18.386 4.26245 3.5 17.8586 3.5 34.6312C3.5 51.4039 18.386 65 36.75 65Z" fill="#4FB96E"/>
                                        <path d="M16.7998 52.2904C16.7998 50.7218 18.0833 49.3962 19.7923 49.2231C32.6185 47.9264 40.9393 48.0433 53.7372 49.252C54.3763 49.3133 54.982 49.5432 55.4804 49.9138C55.9787 50.2843 56.3481 50.7794 56.5435 51.3385C56.7389 51.8976 56.7517 52.4966 56.5805 53.0623C56.4093 53.628 56.0614 54.1359 55.5793 54.524C40.4755 66.5485 31.8438 66.383 17.8638 54.5362C17.1822 53.9592 16.7998 53.1392 16.7998 52.2919V52.2904Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5664 50.7615C40.8699 49.5619 32.6688 49.4495 19.9739 50.7326C19.556 50.7771 19.1708 50.9608 18.892 51.2485C18.6131 51.5363 18.4603 51.9078 18.4627 52.2921C18.4627 52.7263 18.6605 53.1378 18.9947 53.4233C25.924 59.2936 31.1742 61.9463 36.3063 61.963C41.4568 61.9797 46.9896 59.3482 54.4874 53.3808C54.7256 53.1871 54.8971 52.9345 54.981 52.6535C55.0649 52.3725 55.0577 52.0753 54.9601 51.798C54.8626 51.5207 54.6789 51.2753 54.4315 51.0915C54.1841 50.9078 53.8835 50.7937 53.5664 50.763V50.7615ZM19.6098 47.714C32.5707 46.4036 41.0129 46.522 53.9105 47.7413C54.872 47.833 55.7833 48.1787 56.5329 48.7361C57.2825 49.2935 57.8379 50.0384 58.1312 50.8797C58.4244 51.721 58.4427 52.6221 58.1838 53.4728C57.9249 54.3234 57.4001 55.0867 56.6736 55.6691C49.0677 61.7246 42.7336 65.0227 36.2963 64.9999C29.8409 64.9786 23.786 61.6244 16.7354 55.6493C16.2306 55.2199 15.8281 54.6999 15.5532 54.122C15.2783 53.5441 15.1369 52.9206 15.1377 52.2905C15.1353 51.1584 15.5902 50.0653 16.4154 49.2206C17.2406 48.3758 18.3781 47.8388 19.6098 47.7124V47.714Z" fill="#4FB96E"/>
                                        <path d="M50.0502 28.5574C50.0502 31.7792 48.649 34.8689 46.1547 37.147C43.6605 39.4251 40.2776 40.705 36.7502 40.705C33.2228 40.705 29.8399 39.4251 27.3457 37.147C24.8514 34.8689 23.4502 31.7792 23.4502 28.5574C23.4502 25.3357 24.8514 22.2459 27.3457 19.9678C29.8399 17.6897 33.2228 16.4099 36.7502 16.4099C40.2776 16.4099 43.6605 17.6897 46.1547 19.9678C48.649 22.2459 50.0502 25.3357 50.0502 28.5574Z" fill="#4FB96E"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.7502 37.6681C39.3957 37.6681 41.9329 36.7082 43.8036 34.9996C45.6743 33.2911 46.7252 30.9737 46.7252 28.5574C46.7252 26.1411 45.6743 23.8238 43.8036 22.1152C41.9329 20.4067 39.3957 19.4468 36.7502 19.4468C34.1047 19.4468 31.5675 20.4067 29.6968 22.1152C27.8261 23.8238 26.7752 26.1411 26.7752 28.5574C26.7752 30.9737 27.8261 33.2911 29.6968 34.9996C31.5675 36.7082 34.1047 37.6681 36.7502 37.6681ZM36.7502 40.705C40.2776 40.705 43.6605 39.4251 46.1547 37.147C48.649 34.8689 50.0502 31.7792 50.0502 28.5574C50.0502 25.3357 48.649 22.2459 46.1547 19.9678C43.6605 17.6897 40.2776 16.4099 36.7502 16.4099C33.2228 16.4099 29.8399 17.6897 27.3457 19.9678C24.8514 22.2459 23.4502 25.3357 23.4502 28.5574C23.4502 31.7792 24.8514 34.8689 27.3457 37.147C29.8399 39.4251 33.2228 40.705 36.7502 40.705Z" fill="#4FB96E"/>
                                    </svg>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="nama-user"><a href="{{ route('detail-lurah-kasi') }}" class="text-black stretched-link">Nama Kasi</a></h6>
                                        </div>
                                        <h6 class="telpon-user-green">No. Induk Pegawai</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
